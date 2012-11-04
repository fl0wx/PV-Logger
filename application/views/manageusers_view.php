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
                            <td class="tableusername"><?php echo $row->username;?></td>
                            <td><?php echo $row->email;?></td>
                            <td><?php echo $row->userlevel;?></td>
                            <td class="hidden tableuserid"><?php echo $row->ID;?></td>
                            <td><a href="#" class="editusericon"><i class="icon-cog"></i></a><a href="#" class="deleteusericon"><i class="icon-trash"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
    
              <div class="modal hide" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <h3 id="deleteUserModalLabel"></h3>
                </div>
                <div class="modal-body">
                    <p class="modaltext" ></p>
                </div>
                <div class="modal-footer">
                    <div id="beforeconfirm">
                        <button class="btn btn-primary" id="deleteUserModalConfirm" data-loading-text="Bitte warten...">Löschen</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Abbrechen</button>
                    </div>
                    <div class="hidden" id="afterconfirm">
                        <button class="btn btn-primary" id="confirmdeleted" data-dismiss="modal" aria-hidden="true">Ok</button>
                    </div>
                </div>
              </div>
               
               
               <div class="modal hide" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <h3 id="editUserModalLabel"></h3>
                </div>
                <div class="modal-body">
                    <div style="display: block">
                        <input name="username" placeholder="" type="text">
                        <input name="email" placeholder="" type="email">
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="editUserModalUserModalConfirm" data-loading-text="Bitte warten...">Speichern</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Abbrechen</button> 
                </div>
                   
              </div>

            </div>
          </div>
      </div>