
    <div class="container">
        
      <div class="starter-template">
        <h2 style="text-align: center">Kaloji Narayana Rao University of Health Sciences</h2>        
      </div>
       
        <div class="row">
            <img align="middle" width="1200" height='1200' src="<?php echo base_url()."assets/images/banner.jpg";?>" alt="Image" style="width:50%;height:50%" />
            &nbsp;
        </div>
        
        <!-- Table -->
        <?php $sno = 1;?>
        
        <?php if(isset($notification_records) && !empty($notification_records)){?>
        <table class="table" id="table-sort">
            <thead>
            <th colspan="6">Notifications</th>
            </thead>
            <tr>
                <th>SNo</th>
                <th><b>Category</b></th>
                <th><b>Date</b></th>
                <th><b>Title</b></th>
                <th><b>Link</b></th>
            </tr>
            
                <?php foreach($notification_records as $notification){?>
                <tr >
                <td><?php echo $sno++;?></td>
                <td><?php echo $notification->notification_category;?></td>
                <td><?php echo date("d-M-Y",strtotime($notification->notification_date));?></td>                
                <td><?php echo $notification->title ;?></td>
                <td><a href="<?php echo $notification->link;?>" target="_blank">Notification File</a></td>
                </tr>
                <?php } ?>
            
        </table>
        <?php } ?>
    </div><!-- /.container -->


   