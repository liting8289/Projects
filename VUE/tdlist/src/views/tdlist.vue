<template>
  <div>
       
        <div class="square1">
            <div class="title">
                <a>TO DO LIST</a>
            </div>
        </div>
        

        <!-- 按鈕 -->
        <div class ="square2">
            <button class="choose"  @click="getAllList">全部</button>
            <button  class="choose" v-on:click="Done" >已完成</button>
            <button class="choose" v-on:click="Undone">未完成</button>
        </div>

        <!-- 輸入欄 -->
        <div class ="square3"> 
        <input placeholder="新增代辦事項" class="text" v-model="work" v-on:keyup.enter ="addlist"/> 
        </div>
        <!-- 名片 -->
        <div class="square4">
            <list
                v-for="item in listData"
                :key="item.id"
                :item="item"
                @Deletelist="deleteItem"
                @Updatelist="updateItem"
                @fin="finItem"
            />
        </div>
  </div>
</template>

<script>
// 引入 components
import list from "../components/list.vue";
// 引入 api function
import {lists,Insertlist,Deletelist,Updatelist,Done,Undone,fin} from "../services/tdlist";
export default {
    data(){
      return{
        listData:[],
        id:"",
        work:"", 
        act:"",
      };

  },
  // 引入 components
  components: {
    list,
  },
   methods: {
    // 所有人員
    getAllList() {
        lists().then((res) => {
        this.listData=res.data;
        console.log(res);
      });
    },
    Done(){
        Done().then((res)=>{
            this.listData=res.data;
            console.log(res);
        })
    },
    Undone(){
        Undone().then((res)=>{
            this.listData=res.data;
            console.log(res);
        })
    },
    // 新增
    addlist() {        
      Insertlist({
        work: this.work,
        }).then(() => {
        alert("新增成功");
    this.work = "";
    this.getAllList();
      });
    },

    // 刪除
    deleteItem(id){
        Deletelist({
            id:id,
            }).then(() => {
            alert("刪除成功");
        this.getAllList();
    });
    },

    // 更新
    updateItem(id,work,act){
        Updatelist({
            id: id,
            work: work,
            act:act,
        }).then(()=>{
            alert("修改成功");
        });
    },
    finItem(id){
        fin({
            id:id,
        });
    }
    },
// 載入畫面時就執行
  mounted() {
    this.getAllList();
  }
};
</script>

<style scoped>
html{
    /*設定網頁背景色*/
    background-color:#e9e7ef;
    font-family: Microsoft JhengHei;
}

*{
    padding:0;
    margin: 0;
    box-sizing: border-box;
    
}

.square1{
    display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    box-sizing: border-box;
    margin-top: 20px;
}

.title{
    width: 60%;
    height: 60px;
    font-size: 40px;
    box-sizing: border-box;
    background-color: #801dae;
    border-radius: 20px;
    margin-bottom: 20px;
    color: white;
}

.square2{
    display:flex;
    justify-content: center;

}

.choose{
    width: 100px;
    font-size: 20px;
    display: flex;
    justify-content: center;
    text-align: center;
    box-sizing: border-box;
    margin:20px;
    border: none;
    background-color: transparent;
}

.square3{
    display:flex;
    justify-content: center;
}

.text{
    width: 60%;
    height: 40px;
    box-sizing: border-box;
    background-color: white;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 10px;
    display: flex;
    align-items: center;
}

.square4{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 10px;
    display:flex;
    flex-direction:column;
    justify-content: center;
    box-sizing: border-box;
}
.table{
    display:flex;
    justify-content: space-between;
    align-items: center;
    height: auto;
    width: 600px;
    margin-left: 100px;
    padding-left: 200px;
    
}

.button{ 
    width: 20%;
    display: flex;
    justify-content: center;
}

.update{
    width: 40%;
    height: 30px;
    padding: 5px;
    margin: 5px;
    border-radius: 10px;
    background-color: pink;
    display: flex;
    justify-content: center;
}

.del{
    width: 40%;
    height: 30px;
    padding: 5px;
    margin: 5px;
    border-radius: 10px;
    background-color: plum;
    display: flex;
    justify-content: center;
}
</style>