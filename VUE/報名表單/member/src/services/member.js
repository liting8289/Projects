import axios from "axios";

  const userAxios = axios.create({
    baseURL: "http://127.0.0.1:8000/api",
  });

  const apiUrl = "http://127.0.0.1:8000/api";


  // 新增人員
  // 通常 function 名稱會和 API 網址一樣，方便使用
// contents為畫中觸發此function要傳入的內容
  export function insertMember(contents) {
    const api = `${apiUrl}/insertMember`;
    const content = {
      name: contents.name,
      student_id: contents.student_id,
      identity: contents.identity,
    };
    return userAxios.post(api, content).then((res) => {
      return res;
    });
  }


// 查詢人員
  export function members() {
    return userAxios.get(`${apiUrl}/members`);
  }


// 修改人員
  export function UpdateMember(contents) {
    const api = `${apiUrl}/member/UpdateMember`;
    const content = {
      id: contents.id,
      name: contents.name,
      student_id: contents.student_id,
      identity: contents.identity,
    };
    return userAxios.post(api, content).then((res) => {
      return res;
    });
  }

  // 刪除人員
  export function DeleteMember(contents) {
    const api = `${apiUrl}/member/DeleteMember`;
    const content = {
      id: contents.id,
    };
    return userAxios.post(api, content).then((res) => {
      return res;
    });
     
  }