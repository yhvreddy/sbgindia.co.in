<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
    </ol>
  </section>

  <?php
    // Your code here!
    /*function percantage($sAmout,$soldBy){
      
        //it is the db result
        $users_array = array(
            array(
            'name' => 'Harsha',
            'title' => 'GM',
            'per' => 20
            ),  
            array(
            'name' => 'Prasad',
            'title' => 'MM',
            'per' => 18
            ),  
            array(
            'name' => 'Chandra',
            'title' => 'BDO',
            'per' => 15
            ),
            array(
            'name' => 'Sekhar',
            'title' => 'BDE',
            'per' => 10
            )
        );
        
        $percentageArray=[];

          if($soldBy=="GM"){
            $value=getUseerData($users_array,"GM");
            $per=$value['per'];
            $perCal=($sAmout* $per)/100;
            $d=array("name"=>$value['name'],"role"=>$value['title'],"per"=>$value['per'],"perAmout"=>$perCal,'sale_amount'=>$sAmout);
            array_push($percentageArray, $d);
          }

          if($soldBy=="MM"){
            $value=getUseerData($users_array,"MM");
            $perCal=($sAmout* 18)/100;
            $getper = $value['per'];
            $d=array("name"=>$value['name'],"role"=>$value['title'],"per"=>$value['per'],"perAmout"=>$perCal,'sale_amount'=>$sAmout,'get_percent'=>$getper);
            array_push($percentageArray, $d);
          
            $GMvalue=getUseerData($users_array,"GM");
            $perCal=($sAmout* 2)/100;
            $getper = $GMvalue['per'] - 18;
            $d=array("name"=>$GMvalue['name'],"role"=>$GMvalue['title'],"per"=>$GMvalue['per'],"perAmout"=>$perCal,'sale_amount'=>$sAmout,'get_percent'=>$getper);
            array_push($percentageArray, $d);
          
          }
          
          if($soldBy=="BDO"){
            $value=getUseerData($users_array,"BDO");
            $perCal=($sAmout* 15)/100;
            $d=array("name"=>$value['name'],"role"=>$value['title'],"per"=>$value['per'],"perAmout"=>$perCal,'sale_amount'=>$sAmout);
            array_push($percentageArray, $d);
          
            $MMvalue=getUseerData($users_array,"MM");
            $MMperCal=($sAmout* 3)/100;
            $d=array("name"=>$MMvalue['name'],"role"=>$MMvalue['title'],"per"=>$MMvalue['per'],"perAmout"=>$MMperCal,'sale_amount'=>$sAmout);
            array_push($percentageArray, $d);
          
            $GMvalue=getUseerData($users_array,"GM");
            $GMperCal=($sAmout* 2)/100;
            $d=array("name"=>$GMvalue['name'],"role"=>$GMvalue['title'],"per"=>$GMvalue['per'],"perAmout"=>$GMperCal,'sale_amount'=>$sAmout);
            array_push($percentageArray, $d);
          }
          
          if($soldBy=="BDE"){
            $value=getUseerData($users_array,"BDE");
            $perCal=($sAmout* 10)/100;
            $d=array("name"=>$value['name'],"role"=>$value['title'],"per"=>$value['per'],"perAmout"=>$perCal,'sale_amount'=>$sAmout);
            array_push($percentageArray, $d);
          
            $BDOvalue=getUseerData($users_array,"BDO");
            $perCal=($sAmout*5)/100;
            $d=array("name"=>$BDOvalue['name'],"role"=>$BDOvalue['title'],"per"=>$BDOvalue['per'],"perAmout"=>$perCal,'sale_amount'=>$sAmout);
            array_push($percentageArray, $d);
          
            $MMvalue=getUseerData($users_array,"MM");
            $MMperCal=($sAmout * 3)/100;
            $d=array("name"=>$MMvalue['name'],"role"=>$MMvalue['title'],"per"=>$MMvalue['per'],"perAmout"=>$MMperCal,'sale_amount'=>$sAmout);
            array_push($percentageArray, $d);
          
            $GMvalue=getUseerData($users_array,"GM");
            $GMperCal=($sAmout* 2)/100;
            $d=array("name"=>$GMvalue['name'],"role"=>$GMvalue['title'],"per"=>$GMvalue['per'],"perAmout"=>$GMperCal,'sale_amount'=>$sAmout);
            array_push($percentageArray, $d);
          }
    
        print_r($percentageArray);
    }

    function getUseerData($userArray,$type){
      $data=[];
        foreach ($userArray as $value) {
            if($type==$value['title']){
              $data=  $value;
            }
        }
        return  $data;
    }
    echo "<pre>"; 
      percantage(10000,"MM");
    echo "</pre>";*/
  ?>

    
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->