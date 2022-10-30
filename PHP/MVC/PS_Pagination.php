<?php
class PS_Pagination{
        public $php_self;
        public $rows_per_page = 10; //Number of records to display per page
        public $total_rows = 0; //Total number of rows returned by the query
        public $links_per_page = 5; //Number of links to display per page
        public $append = ""; //Paremeters to append to pagination links
        public $sql = "";
        public $debug = false;
        public $dbh =false;
        public $page = 1;
        public $max_pages = 0;
        public $offset = 0;

        /**
         * Constructor
         *
         * @param resource $dbh Mysql connection link
         * @param string $sql SQL query to paginate. Example : SELECT * FROM users
         * @param integer $rows_per_page Number of records to display per page. Defaults to 10
         * @param integer $links_per_page Number of links to display per page. Defaults to 5
         * @param string $append Parameters to be appended to pagination links
         */

        function __construct($dbh, $sql, $rows_per_page = 5, $links_per_page = 5, $append = "") {
                $this->dbh = $dbh;
                $this->sql = $sql;
                $this->rows_per_page = (int)$rows_per_page;
                if (intval($links_per_page ) > 0) {
                        $this->links_per_page = (int)$links_per_page;
                } else {
                        $this->links_per_page = 5;
                }
                $this->append = $append;
                $this->php_self = htmlspecialchars($_SERVER['PHP_SELF'] );
				//$this->php_self =str_replace($this->php_self,"index.php","PS_PaginationTest.php");
                if (isset($_GET['page'] )) {
                        $this->page = intval($_GET['page'] );
                }
        }

        /**
         * Executes the SQL query and initializes internal variables
         *
         * @access public
         * @return resource
         */
        function paginate() {
                //Check for valid mysql connection
                if (! $this->dbh ) {
                        if ($this->debug)
                                echo "MySQL connection missing<br />";
                        return false;
                }

                //Find total number of rows
                $stmt = $this->dbh->query($this->sql );
                if (! $stmt) {
                        if ($this->debug)
                                echo "SQL query failed. Check your query.<br /><br />Error Returned: " . $dbh->errorInfo();
                        return false;
                }
                $this->total_rows = $stmt->rowCount();
                $stmt=null;

                //Return FALSE if no rows found
                if ($this->total_rows == 0) {
                        if ($this->debug)
                                echo "Query returned zero rows.";
                        return FALSE;
                }

                //Max number of pages
                $this->max_pages = ceil($this->total_rows / $this->rows_per_page );
                if ($this->links_per_page > $this->max_pages) {
                        $this->links_per_page = $this->max_pages;
                }

                //Check the page value just in case someone is trying to input an aribitrary value
                if ($this->page > $this->max_pages || $this->page <= 0) {
                        $this->page = 1;
                }

                //Calculate Offset
                $this->offset = $this->rows_per_page * ($this->page - 1);

                //Fetch the required result set
                $stmt =$this->dbh->query($this->sql . " LIMIT {$this->offset}, {$this->rows_per_page}" );
                if (! $stmt) {
                        if ($this->debug)
                                echo "Pagination query failed. Check your query.<br /><br />Error Returned: " . $dbh->errorInfo();
                        return false;
                }
                return $stmt;
        }

        /**
         * Display the link to the first page
         *
         * @access public
         * @param string $tag Text string to be displayed as the link. Defaults to 'First'
         * @return string
         */
        function renderFirst($tag = '首頁') {
                if ($this->total_rows == 0)
                        return FALSE;

                if ($this->page == 1) {
                        return "$tag ";
                } else {
				  return '<a href="' . $this->php_self . '?page=1&' . $this->append . '">' . $tag . '</a> ';
                }
        }

        /**
         * Display the link to the last page
         *
         * @access public
         * @param string $tag Text string to be displayed as the link. Defaults to 'Last'
         * @return string
         */
        function renderLast($tag = '尾頁') {
                if ($this->total_rows == 0)
                        return FALSE;

                if ($this->page == $this->max_pages) {
                        return $tag;
                } else {
				 str_replace($this->php_self,"index.php","test");
                        return ' <a href="' . $this->php_self . '?page=' . $this->max_pages . '&' . $this->append . '">' . $tag . '</a>';
                }
        }

        /**
         * Display the next link
         *
         * @access public
         * @param string $tag Text string to be displayed as the link. Defaults to '>>'
         * @return string
         */
        function renderNext($tag = '>>') {
                if ($this->total_rows == 0)
                        return FALSE;

                if ($this->page < $this->max_pages) {
					return '<a href="' . $this->php_self . '?page=' . ($this->page + 1) . '&' . $this->append . '">' . $tag . '</a>';
                } else {
                        return $tag;
                }
        }

        /**
         * Display the previous link
         *
         * @access public
         * @param string $tag Text string to be displayed as the link. Defaults to '<<'
         * @return string
         */
        function renderPrev($tag = '<<') {
                if ($this->total_rows == 0)
                        return FALSE;

                if ($this->page > 1) {
                        return ' <a href="' . $this->php_self . '?page=' . ($this->page - 1) . '&' . $this->append . '">' . $tag . '</a>';
                } else {
                        return " $tag";
                }
        }

        /**
         * Display the page links
         *
         * @access public
         * @return string
         */
        function renderNav($prefix = '<span class="page_link">', $suffix = '</span>') {
                if ($this->total_rows == 0)
                        return FALSE;

                $batch = ceil($this->page / $this->links_per_page );
                $end = $batch * $this->links_per_page;
                if ($end == $this->page) {
                        //$end = $end + $this->links_per_page - 1;
                //$end = $end + ceil($this->links_per_page/2);
                }
                if ($end > $this->max_pages) {
                        $end = $this->max_pages;
                }
                $start = $end - $this->links_per_page + 1;
                $links = '';

                for($i = $start; $i <= $end; $i ++) {
                        if ($i == $this->page) {
                                $links .= $prefix . " $i " . $suffix;
                        } else {
                                $links .= ' ' . $prefix . '<a href="' . $this->php_self . '?page=' . $i . '&' . $this->append . '">' . $i . '</a>' . $suffix . ' ';
                        }
                }

                return $links;
        }

        /**
         * Display full pagination navigation
         *
         * @access public
         * @return string
         */
        function renderFullNav() {
                return $this->renderFirst() . '&nbsp;' . $this->renderPrev() . '&nbsp;' . $this->renderNav() . '&nbsp;' . $this->renderNext() . '&nbsp;' . $this->renderLast();
        }

        /**
         * Set debug mode
         *
         * @access public
         * @param bool $debug Set to TRUE to enable debug messages
         * @return void
         */
        function setDebug($debug) {
                $this->debug = $debug;
        }
        
        function links($pager) {
        //Display the full navigation in one go
        $strNav ="";
		//$strNav= $pager->renderFullNav();
		$strNav .="<br />\n";
		
		$strNav .=$pager->renderFirst();
	
		//Display the link to previous page: <<
		$strNav .=$pager->renderPrev();
	
	
		$strNav .=$pager->renderNav('<span>', '</span>');
	
		//Display the link to next page: >>
		$strNav .=$pager->renderNext();
	
		//Display the link to last page: Last
        $strNav .=$pager->renderLast();
		
        return $strNav;
        }
}
?>
