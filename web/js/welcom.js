layui.use('table', function(){
    var table = layui.table;
    //第一个实例
    table.render({
      elem: '#notice-table'
      ,height: 312
      ,url: '../php/getNotice.php' //数据接口
      ,page: true //开启分页
      ,cols: [[ //表头
        {field: 'notice_id', title: 'ID', width:50, sort: true, fixed: 'left'}
        ,{field: 'title', title: '標題'}
        ,{field: 'content', title: '內容'}
        ,{field: 'create_date', title: '時間', width:180, sort: true} 

      ]]
      ,parseData: function(res){ //res 即为原始返回的数据
        console.log(res)

        return {
          "code": res.code, //解析接口状态
          "msg": res.msg, //解析提示文本
          "count": res.count, //解析数据长度
          "data": res.data //解析数据列表
        };
      }
    });
    
});
