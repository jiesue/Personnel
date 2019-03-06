var el = document.getElementById('dept-table');

var deptTable = new Vue({
    el: el,
    data: {
        update: false,
        count: 0,
        tableData: []
    },
    methods: {
        getData(){
            $.ajax({
                type: 'get',
                url: '../php/getDept.php',
                data: '',
                complete: function (res) {
                    if (res.status === 200) {
                        //   console.log(res.responseText)
                        var resObj = JSON.parse(res.responseText);
                        //   console.log(resObj.data)
                        deptTable.count = resObj.count;
                        deptTable.tableData = resObj.data;
    
                        // console.log(tableData)
    
                    } else if (res.status === 401) {
                        alert('账号或密码错误，请重新输入！！')
                    }
    
                }
            })
        }

    },

    mounted() {
        this.getData()
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