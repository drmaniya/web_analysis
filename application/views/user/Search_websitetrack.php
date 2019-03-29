<table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Ip Address</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">City</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">State</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                <abbr title="Rotten Tomato Rating">Country</abbr>
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Http Refferer</th>
                                                           <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Device Type</th>               <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Device Os</th>               <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Device browser</th>               <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">No of Time Visits</th>
                                        </tr>


                                        
                                    </thead>
                                    <tbody>
                                    <?php foreach(@$tracking_data as $row){?>
                                        <tr>
                                            <td class="title"><?php echo @$row['user_ip'];?></td>
                                            <td><?php echo @$row['user_city'];?></td>
                                            <td><?php echo @$row['user_state'];?></td>
                                            <td><?php echo @$row['user_country'];?></td>
                                            <td><?php echo @$row['http_refferer'];?></td>
                                            <td><?php echo @$row['device_type'];?></td>
                                            <td><?php echo @$row['device_os'];?></td>
                                            <td><?php echo @$row['device_browser'];?></td>
                                            <td><?php echo @$row['return_count'];?></td>
                                        </tr>
                                       
                                        <?php }?>
                                        <!--<tr>
                                        	<td colspan="10"><?php //echo @$this->pagination->create_links(); ?></td>
                                            
                                        </tr>-->
                                    </tbody>
                                </table>