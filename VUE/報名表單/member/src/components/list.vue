<template>
  <div>
     
<div class="square2">
    <div class="table">
        <div class="card_item">
            <div class="text">
                <a>姓名 : </a>
                <a>{{item.name}}</a>
            </div>
        </div>
        <div class="card_item">
            <div class="text">
                <a>學號 : </a>
                <a>{{ item.student_id}}</a>
            </div>
        </div>
        <div class="card_item">
            <div class="text">
                <a>身分 : </a>
                <a>{{ item.identity}}</a>
                </div>
        </div>
        <div class="square3">
            <button class="add">修改</button>
            <button class="del">刪除</button>
        </div>
    </div>
</div>
  </div>
</template>

<script>
export default {
  props: {
    item: Object,
  },
  mounted(){
    console.log(this.item)
  },

};
</script>

<style scoped>
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