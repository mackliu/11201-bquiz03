<?php include_once "DB.php";

class Order extends DB{
    protected $session=[
        1=>"14:00~16:00",
        2=>"16:00~18:00",
        3=>"18:00~20:00",
        4=>"20:00~22:00",
        5=>"22:00~24:00"
];
    function __construct()
    {
        parent::__construct('orders');
    }

    function backend(){
        $view=['rows'=>$this->all(' order by `no` desc'),
               'movies'=>$this->q("select `movie` from $this->table GROUP BY `movie`")];
        return $this->view("./view/backend/order.php",$view);
    }
    function front(){

        $this->view("./view/front/order.php");
    }
    
    function getSessions($movie,$date){
        
        $now=date("G");
        $start=($date!=date("Y-m-d") || $now<14  )?1:(floor($now/2)-5);
        $html="";
        for($i=$start;$i<=5;$i++){
            $seats=$this->sum('qt',['movie'=>$movie,'date'=>$date,'session'=>$this->session[$i]]);
            $html.="<option value='{$this->session[$i]}'>{$this->session[$i]} 剩餘座位 ".(20-$seats)."</option>";
        }
        return $html;
    }

    function seats($request){
        $orders=$this->all($request);
        $tmp=[];
        foreach($orders as $order){
            $seats=unserialize($order['seats']);
            $tmp=array_merge($tmp,$seats);
        }
        return $tmp;
    }
}