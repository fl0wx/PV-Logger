<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="page-header">
                <h1>Nutzer-Verwaltung</h1>
            </div>
          <div class="row-fluid">
           <div class="span9">
              <div>
                  
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>User</th>
                      <th>Email</th>
                      <th>Userlevel</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($manageusers as $row): ?>
                        <tr>
                            <td><?php echo $row->username;?></td>
                            <td><?php echo $row->email;?></td>
                            <td><?php echo $row->userlevel;?></td>
                            <td><?php echo anchor('manage/edituser/'.$row->ID, '<i class="icon-cog"></i> ');?><?php echo anchor('manage/deleteuser/'.$row->ID, ' <i class="icon-trash"></i>');?></td>
                        </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
      </div>