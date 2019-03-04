var el = document.getElementById('user-table');

var userTable = new Vue({
    el: el,
    data: {
        update: false,
        count: 0,
        tableData: []
    },
    method() {

    },

    created() {
        $.ajax({
            type: 'get',
            url: '../php/getUser.php',
            data: '',
            complete: function (res) {
                if (res.status === 200) {
                    //   console.log(res.responseText)
                    var resObj = JSON.parse(res.responseText);
                    //   console.log(resObj.data)
                    userTable.num = resObj.count;
                    userTable.tableData = resObj.data;

                    // console.log(tableData)

                } else if (res.status === 401) {
                    alert('账号或密码错误，请重新输入！！')
                }


            }
        })
    },
    watch: {
        tableData: {
            handler(newVal) {
                console.log(newVal);
            },
            deep: true,
            immediate: true
        }
    }
})