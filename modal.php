<!-- The Modal -->
<div id="myModal" class="modal">
   <!-- Modal content -->
   <div class="modal-content">
     <span class="close" onClick="fechaModal()">&times;</span>
         <form action="Processa.php" method="post" name="f1" id="f1" onsubmit="return validaLogin()">
         <table id="form">
             <tr>
                 <td>
                     E-mail: 
                 </td>
                 <td>
                     <input type="text" name="email" id="email" size="50"/>
                 </td>
             </tr>
             <tr>
                 <td>
                     Senha:
                 </td>
                 <td>
                     <input type="text" name="senha" id="senha"/>
                 </td>
             </tr>
             <tr>
                 <td></td>
                 <td>
                 	<input type="submit" class="signupbtn" name="enviar" id="enviar" value="Enviar">
                 </td>
             </tr>
         </table>
            
         <table id="btns">
            <tr>
             	<input type="button" class="cancelbtn" name="cancelar" id="cancelar" value="Cancelar" onClick="fechaModal()"/>
                 <a href="cadastro.php"><input type="button" class="cadastrabtn" name="cadastro" id="cadastro" value="Cadastrar-se" /></a>
             </tr>
         </table>
     </form>
   </div>
     
</div> 
