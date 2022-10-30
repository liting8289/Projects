<template>
<div>
      <!-- 抬頭 -->
  <div class="square1">
    <div class="title">
        球隊報名表
    </div>
  </div>

<!-- 新增人員 -->
  <div class="square2">
    <div class="table">
      
        <div class="item">
          <a>姓名 : </a>
          <input type="text" class="textbox" v-model="name" />
        </div>
        <div class="item">
          <a>學號 : </a>
          <input type="text"  class="textbox" v-model="student_id" />
        </div>

<!-- 選擇 -->
        <div class="item" >
          <a>身分 :</a>
          <select  class="textbox" v-model="identity" >
            <option>請選擇身分</option>
            <option>隊長</option>
            <option>球員</option>
          </select>

<!-- 按鈕 -->                
        </div>
          <button class ="button" @click="addMember">添加</button>
 
    </div>
  </div>

<!-- 名片 -->
 <div class ="p">球員名單</div>
  <div class="square2">
    <List v-for="item in listData" :key="item.ID" :item="item" />
  </div>
</div>
</template>

<script>
  import List from "../components/list.vue";
  import {members,insertMember} from "../services/member";
  export default {
        data() {
    return {
      listData: [],
      name: "",
      student_id: "",
      identity: "",
    };
  },
  // 引入 components
  components: {
    List,
  },
  methods:{
    // 所有人員
    getAllMembers(){
      members().then((res) => {
        console.log(res);
        this.listData =res.data
      });
    },
    addMember() {
      insertMember({
        name: this.name,
        student_id: this.student_id,
        identity: this.identity,
      }).then((res) => {
        alert("新增成功");
        this.name = "";
        this.student_id = "";
        this.identity = "";
        this.getAllMembers();
      });
    }
  },
  mounted(){
    this.getAllMembers();
  }
};
</script>

<style scoped>
.title{
  width: 80%;
  margin-top: 20px;
  height: 60px;
	background-color:#801dae;
  color: white;
  border-radius: 20px;/*搗圓角*/
  margin-bottom: 50px;
  box-sizing: border-box;
}

.square1{
  font-size: 40px;
  display:flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  box-sizing: border-box;
  }

.square2{
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 10px;
  display:flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  box-sizing: border-box;
}

.table{
  background-color:white ;
    margin-bottom: 50px;
    width: 500px;
    height: 250px;
    display:flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column; 
    border-radius: 10px;
    box-sizing: border-box;
}
.textbox{
  width: 200px;
  height: 30px;
  margin-bottom: 0px;
  border-radius: 10px;
  text-align: center;
  box-sizing: border-box;
}
.item{
  margin-top: 10px;
  display:flex;
  justify-content: center;
  /* flex-direction: column;   */
  border-radius: 10px;
  padding: 10px;
  box-sizing: border-box;
}

.card_item{
  width: 300px;
  display:flex;
  /* flex-direction: column;  */
  margin-top: 20px;
  border-radius: 10px;
  text-align: start;
  align-items: center;
  box-sizing: border-box;
}

.button{
  width: 200px;
  height: 40px;
  border-radius: 10px;
  text-align: center;
  font-size: 15px;
  font-weight: bold;
  margin-top: 10px;
  color: white;
  background-color:#b0a4e3 ;
  box-sizing: border-box;
}

.p{
  display: flex;
  justify-content: center;
  margin-bottom: 15px;
  font-weight: bold;
}
.square3{
  width: 100%;
  display: flex;
  justify-content:center;
  text-align: center;
  margin: 10px;
  margin-bottom: 20px;
  box-sizing: border-box;
}
.add{
  width: 100px;
  height: 40px;
  border-radius: 10px;
  text-align: center;
  font-size: 10px;
  font-weight: bold;
  margin: 5px;
  color: white;
  background-color:#ef7a82 ;
  box-sizing: border-box;
}

.del{
  width: 100px;
  height: 40px;
  border-radius: 10px;
  text-align: center;
  font-size: 10px;
  font-weight: bold;
  margin: 5px;
  color: white;
  background-color:#1685a9 ;
  box-sizing: border-box;
}
</style>