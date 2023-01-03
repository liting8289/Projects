import axios from "axios";

const userAxios = axios.create({
  baseURL: "http://127.0.0.1:8000/api",
});

const apiUrl = "http://127.0.0.1:8000/api";

// 通常 function 名稱會和 API 網址一樣，方便使用
// contents為畫中觸發此function要傳入的內容
export function Insertlist(contents) {
  const api = `${apiUrl}/Insertlist`;
  const content = {
    work: contents.work,
    
  };
  return userAxios.post(api, content).then((res) => {
    return res;
  });
}

  // 查詢人員
  export function lists() {
    return userAxios.get(`${apiUrl}/lists`);
  }

// 修改人員
export function Updatelist(contents) {
  const api = `${apiUrl}/Updatelist`;
  const content = {
    id: contents.id,
    work: contents.work,
    act: contents.act,
  };
  return userAxios.post(api, content).then((res) => {
    return res;
  });
}

// 刪除人員
export function Deletelist(contents) {
  const api = `${apiUrl}/Deletelist`;
  const content = {
    id: contents.id,
  };
  return userAxios.post(api, content).then((res) => {
    return res;
  });  
}

 // 查詢人員
 export function Done() {
  return userAxios.post(`${apiUrl}/Done`);
}
 // 查詢人員
 export function Undone() {
  return userAxios.post(`${apiUrl}/Undone`);
 }

  // export function fin(contents) {
  //   const content = {
  //     id: contents.id,
  //   }
  //   return userAxios.post(`${apiUrl}/fin`).then((res) => {
  //     return res;
  //   });
      // }
    export function fin(contents) {
      const api = `${apiUrl}/fin`;
      const content = {
        id: contents.id,
      };
      return userAxios.post(api, content).then((res) => {
        return res;
      });  
    
}
