
<?php 
$GLOBAL['sql']=null;
class mysql
{
  private $mysqli;
  private $result;
  private $retd;
  /**
   * 数据库连接
   * @param $config 配置数组
   */
  public function connect($config)
  {
    $host = $config['host'];    //主机地址
    $username = $config['username'];//用户名
    $password = $config['password'];//密码
    $database = $config['database'];//数据库
    $port = $config['port'];    //端口号
    $this->mysqli = new mysqli($host, $username, $password, $database, $port);
    // if( $this->mysqli){
    //   return $this->mysqli;
    // }
  }
  /**
   * 数据查询
   * @param $table 数据表
   * @param null $field 字段
   * @param null $where 条件
   * @return mixed 查询结果数目
   */
  public function select($table, $field = null, $where = null)
  {
    $sql = "SELECT * FROM {$table}";
    if (!empty($field)) {
      $field = '`' . implode('`,`', $field) . '`';
      $sql = str_replace('*', $field, $sql);
    }
    if (!empty($where)) {
      $sql = $sql . ' WHERE ' . $where;
    }
    $GLOBAL['sql'] = $sql;
    $this->result = $this->mysqli->query($sql);
    return $this->result->num_rows;

  }
  /**
   * @return mixed 获取全部结果
   */
  public function fetchAll()
  {
    return $this->result->fetch_all(MYSQLI_ASSOC);
  }
  /**
   * 插入数据
   * @param $table 数据表
   * @param $data 数据数组
   * @return mixed 插入ID
   */
  public function insert($table, $data)
  {
    foreach ($data as $key => $value) {
      $data[$key] = $this->mysqli->real_escape_string($value);
    }
    $keys = '`' . implode('`,`', array_keys($data)) . '`';
    $values = '\'' . implode("','", array_values($data)) . '\'';
    $sql = "INSERT INTO {$table}( {$keys} )VALUES( {$values} )";
    $this->mysqli->query($sql);
    return $this->mysqli->insert_id;
  }
  /**
   * 更新数据
   * @param $table 数据表
   * @param $data 数据数组
   * @param $where 过滤条件
   * @return mixed 受影响记录
   */
  public function update($table, $data, $where)
  {
    foreach ($data as $key => $value) {
      $data[$key] = $this->mysqli->real_escape_string($value);
    }
    $sets = array();
    foreach ($data as $key => $value) {
      $kstr = '`' . $key . '`';
      $vstr = '\'' . $value . '\'';
      array_push($sets, $kstr . '=' . $vstr);
    }
    $kav = implode(',', $sets);
    $sql = "UPDATE {$table} SET {$kav} WHERE {$where}";
    $this->mysqli->query($sql);
    return $this->mysqli->affected_rows;
  }
  /**
   * 删除数据
   * @param $table 数据表
   * @param $where 过滤条件
   * @return mixed 受影响记录
   */
  public function delete($table, $where)
  {
    $sql = "DELETE FROM {$table} WHERE {$where}";
    $this->mysqli->query($sql);
    return $this->mysqli->affected_rows;
  }
}

/* 配置连接参数 */
$config = array(
  'type' => 'mysql',
  'host' => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'personnel',
  'port' => '3306'
);
/* 连接数据库 */
$mysql = new mysql();
$mysql->connect($config);



function httpStatus($num){//网页返回码
  static $http = array (
      100 => "HTTP/1.1 100 Continue",
      101 => "HTTP/1.1 101 Switching Protocols",
      200 => "HTTP/1.1 200 OK",
      201 => "HTTP/1.1 201 Created",
      202 => "HTTP/1.1 202 Accepted",
      203 => "HTTP/1.1 203 Non-Authoritative Information",
      204 => "HTTP/1.1 204 No Content",
      205 => "HTTP/1.1 205 Reset Content",
      206 => "HTTP/1.1 206 Partial Content",
      300 => "HTTP/1.1 300 Multiple Choices",
      301 => "HTTP/1.1 301 Moved Permanently",
      302 => "HTTP/1.1 302 Found",
      303 => "HTTP/1.1 303 See Other",
      304 => "HTTP/1.1 304 Not Modified",
      305 => "HTTP/1.1 305 Use Proxy",
      307 => "HTTP/1.1 307 Temporary Redirect",
      400 => "HTTP/1.1 400 Bad Request",
      401 => "HTTP/1.1 401 Unauthorized",
      402 => "HTTP/1.1 402 Payment Required",
      403 => "HTTP/1.1 403 Forbidden",
      404 => "HTTP/1.1 404 Not Found",
      405 => "HTTP/1.1 405 Method Not Allowed",
      406 => "HTTP/1.1 406 Not Acceptable",
      407 => "HTTP/1.1 407 Proxy Authentication Required",
      408 => "HTTP/1.1 408 Request Time-out",
      409 => "HTTP/1.1 409 Conflict",
      410 => "HTTP/1.1 410 Gone",
      411 => "HTTP/1.1 411 Length Required",
      412 => "HTTP/1.1 412 Precondition Failed",
      413 => "HTTP/1.1 413 Request Entity Too Large",
      414 => "HTTP/1.1 414 Request-URI Too Large",
      415 => "HTTP/1.1 415 Unsupported Media Type",
      416 => "HTTP/1.1 416 Requested range not satisfiable",
      417 => "HTTP/1.1 417 Expectation Failed",
      500 => "HTTP/1.1 500 Internal Server Error",
      501 => "HTTP/1.1 501 Not Implemented",
      502 => "HTTP/1.1 502 Bad Gateway",
      503 => "HTTP/1.1 503 Service Unavailable",
      504 => "HTTP/1.1 504 Gateway Time-out"
  );
  header($http[$num]);
  exit();
}





 ?>





