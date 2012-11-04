$(document).ready(function() {
    
    var id;
   // Nutzer löschen Funktionen ---------
   $("a.deleteusericon").click(function() {
     $('#beforeconfirm').removeClass('hidden');
     $('#afterconfirm').addClass('hidden');
     $('#deleteUserModal').modal('show');
     $('#deleteUserModalLabel').html('Nutzer löschen'); 
     var username = $(this).parents('tr').children('.tableusername').html();
     id = $(this).parents('tr').children('.tableuserid').html();
     $('p.modaltext').html('Soll der Nutzer <strong>'+username+'</strong> wirklich gelöscht werden?');
   });
   
   $('#deleteUserModalConfirm').click(function() {
     $('#deleteUserModalConfirm').button('loading');
     $.ajax({
        url: "https://ssl-id.de/studi.stoiner.de/user/delete/"+id
     }).done(function( msg ) {
         $('#beforeconfirm').addClass('hidden');
         $('#afterconfirm').removeClass('hidden');
         $('p.modaltext').html('Nutzer '+msg+' wurde gelöscht!');
         $('#deleteUserModalLabel').html('Nutzer erfolgreich gelöscht');
         $('#deleteUserModalConfirm').button('reset');
        });
   });
   
   $('#confirmdeleted').click(function() {
        $(window.location).attr('href', 'https://ssl-id.de/studi.stoiner.de/manage/users');
   });
   // Nutzer löschen Funktionen Ende ----------
    
    
   //Nutzer editieren Funktionen ------------
   $("a.editusericon").click(function() {;
     $('#editUserModal').modal('show');
     $('#editUserModalLabel').html('Nutzer bearbeiten'); 
     var username = $(this).parents('tr').children('.tableusername').html();
     id = $(this).parents('tr').children('.tableuserid').html();
     
   });
   //Nutzer editieren Funktionen  Ende ------------
 });

