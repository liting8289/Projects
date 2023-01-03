<template>
<div>
        <div class="table">
            <!-- 勾勾 -->
                
                 <input type="checkbox" v-model="item.completed" :work="item.work" v-if="item.act=='y'" @checked="checked "  >
                 <input type="checkbox" v-model="item.completed" :work="item.work" v-if="item.act=='n'"   @click="finItem(item.id)  "  >
                <!-- 內容 -->
               
                <label :class="{'completed':item.completed}" :for="item.work">
                    <a v-if="item.act=='y'" class="completed">{{item.work}}</a>
                    <a v-else-if="!this.isEdit">{{item.work}}</a>
                    <input v-else type="text"  v-model="item.work" />
                </label>
            <div class="button">
                    <!-- 編輯 -->
                <button class ="update" v-if="!this.isEdit"  @click="isEdit = !isEdit">
                    編輯
                </button>
                <button
                    class="update"
                    v-if="this.isEdit"
                    @click="updateItem(item.id,item.work,item.act)"
                    >
                    確認
                </button> 
                <!-- 刪除 -->
                 <button class="del" @click="deleteItem(item.id)">刪除</button>
            </div>
        </div>
</div>
</template>

<script>
export default {
props: {
    item: Object,
  },
data() {
  return {
    //   編輯
    isEdit: false,
    isfin: false,
  };


},
methods:{
    // 刪除
    deleteItem(id){
    this.$emit("Deletelist",id);
    },
    // 更新
    updateItem(id,work,act){
        if(work ==""){
           alert("請確認輸入內容");
        }else{
            this.isEdit= !this.isEdit;
            this.$emit("Updatelist", id, work,act);
        }
    },
    finItem(id){
        this.$emit("fin",id)
    }
},

mounted(){
    console.log(this.item)
  },

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
    width: 80%;
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
    width: 50px;
    display: flex;
    margin: 10px;
    border: none;
}

.square3{
    display:flex;
    justify-content: center;
}
.completed{
    text-decoration:line-through;
}
.text{
    width: 80%;
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
    margin-left: 10%;
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
    width: 800px;
    margin-left: 500px;
    /* padding-left: 200px; */
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
    border-radius: 5px;
    background-color: pink;
    display: flex;
    justify-content: center;
}

.del{
    width: 40%;
    height: 30px;
    padding: 5px;
    margin: 5px;
    border-radius: 5px;
    background-color: plum;
    display: flex;
    justify-content: center;
}
</style>