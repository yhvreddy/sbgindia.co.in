        <!-- <style>
        . content-block h3{
            text-decoration: underline dashed red !important;
        }
        </style> -->
        
        <!-- Sticky Navbar -->
        <?php //error_reporting(0); ?>
        <div class="page-header page-title-left page-title-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Agent Details</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?=base_url()?>">Home</a>
                            </li>
                            <li class="active">Agent Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-header -->
        <section id="services" class="page-section service-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-push-2">
                        <div class="row">
                            <div class="col-md-12 content-block">
                                <h3 style="text-decoration: underline dashed #007836;">Agent : <?=$userdata->reg_id.' - '.$userdata->name?> </h3>
                                <div class="table-responsive">
                                    <?php if(count($agentsdata) != 0){ ?>
                                        <table class="table table-striped table-bordered datatable">

                                            <thead class="table-light">
                                                <th>#</th>
                                                <th>Layout</th>
                                                <th>Plot Id</th>
                                                <th>Position</th>  
                                                <th>%</th>
                                                <th>Amount</th>
                                                <th>TDS %</th>
                                                <th>Tax amt</th>
                                                <th>Total</th>
                                                <th>Details</th>
                                            </thead>

                                            <tbody>
                                                <?php $i = 1; foreach ($agentsdata as $key => $agent) { 
                                                    $zone = $this->Model_default->select_data('sbgi_zones',array('id'=>$agent->zone_id)); 
                                                    $layout = $this->Model_default->select('id, zone_id, subzone_name,slots_details', 'sbgi_sub_zones' ,array('id'=>$agent->layout_id));
                                                    $flotdata = unserialize($layout[0]->slots_details);
                                                    $agentdata = unserialize($agent->details);
                                                    //echo "<pre>"; print_r($agentdata); echo "</pre>";
                                                    if(count($agentdata) != 0){
                                                ?>
                                                
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><span title="Zone : <?=ucwords($zone[0]->name)?>"  data-toggle="tooltip"><?=$layout[0]->subzone_name?></span></td>
                                                    <td><?=$agent->slot_id?></td>
                                                    
                                                    <?php 
                                                        //plot sale amount
                                                        $sale_amount = $flotdata[$agent->slot_id]['sale_amount'];
                                                        //echo "<pre>"; print_r($agentdata); echo "</pre>"; 
                                                        foreach($agentdata as $key => $value){
                                                            //echo "<pre>"; print_r($value); echo "</pre>";
                                                            if($value['agent_id'] == $userdata->id){ ?>
                                                                <td><?=$value['position']?></td>
                                                                <td><?=$value['percent']?></td>
                                                                <td><?=$value['amount']?></td>
                                                                <td><?=$value['tds_tax']?></td>
                                                                <td><?=$value['tax_amount']?></td>
                                                                <td><?=$value['total_amount']?></td>
                                                    <?php   }
                                                        }
                                                    ?>      
                                                                                                
                                                    <td align="center"><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#AgentDetails_<?=$agent->id?>" class=""> <i class="fa fa-file fa-1x text-primary"></i> </a></td>
                                                </tr>

                                                <div class="modal fade" id="AgentDetails_<?=$agent->id?>">
                                                    <div class="modal-dialog modal-lg" style="top:65px">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title"><?=$agent->slot_id?> Details </h4>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label>Zone : <?=$zone[0]->name?></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Layout : <?=$layout[0]->subzone_name?></label>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label>Plot id : <?=$agent->slot_id?></label>
                                                                </div>

                                                                <div class="col-md-3">

                                                                    <label>Sale amount : <?=$flotdata[$agent->slot_id]['sale_amount']?></label>

                                                                </div>

                                                                <div class="col-md-12">

                                                                    <div class="row">

                                                                        <div class="col-md-3 text-info"><label>Name</label></div>

                                                                        <div class="col-md-1 text-info"><label>Position</label></div>

                                                                        <div class="col-md-1 text-info"><label>%</label></div>

                                                                        <div class="col-md-1 text-info"><label>Amount</label></div>

                                                                        <div class="col-md-2 text-info"><label>TDS Tax</label></div>

                                                                        <div class="col-md-2 text-info"><label>Tax amt</label></div>

                                                                        <div class="col-ms-1 text-info"><label>Total Amount</label></div>

                                                                    </div>

                                                                        <?php

                                                                            $sale_amount = $flotdata[$agent->slot_id]['sale_amount'];

                                                                            foreach($agentdata as $ag){

                                                                                if($userdata->id == $ag['agent_id']){
                                                                                    $agents = $this->Model_default->select_data('sbgi_agent_registrations', array('id'=>$ag['agent_id']));
                                                                                ?>
                                                                            <div class="row">

                                                                                <div class="col-md-3"><label><?=$agents[0]->name?></label></div>
                                                                                <div class="col-md-1"><label><?=$ag['position']?></label></div>
                                                                                <div class="col-md-1"><label><?=$ag['percent']?></label></div>
                                                                                <div class="col-md-1"><label><?=$ag['amount']?></label></div>
                                                                                <div class="col-md-2"><label><?=$ag['tds_tax']?></label></div>
                                                                                <div class="col-md-2"><label><?=$ag['tax_amount']?></label></div>
                                                                                <div class="col-ms-1"><label><?=$ag['total_amount']?></label></div>

                                                                            </div>
                                                                        <?php } } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>

                                                <?php } } ?>
                                            </tbody>

                                        </table>
                                    <?php }else{ ?>
                                    
                                    <?php } ?>
                                </div> 
                            </div>
                        </div>
                        
                    </div>

                    <div class="sidebar col-sm-12 col-md-2 col-md-pull-10">
                        <div class="widget list-border">
                            <div class="widget-title">
                                <h3 class="title">Agent Menus</h3>
                            </div>
                            <div id="MainMenu1">
                                <div class="list-group panel">
                                    <div class="collapse in" id="demo">
                                        <a href="<?=base_url('agents/details')?>" class="list-group-item">Details</a> 
                                        <a href="<?=base_url('agents/profiledetails')?>" class="list-group-item">Profile Details</a> 
                                    </div>
                                </div>
                            </div>
                            <!-- category-list -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->  
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>