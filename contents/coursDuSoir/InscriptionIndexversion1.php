<!DOCTYPE html>
<html lang="en">

        <?php 
        include "../phpElements/HeaderCoursDuSoir.php";
        ?>

<body>

    <div class="contentContainer blueBackground">

       

         <!--TITRE -->

         <div id="topContainer" class="contentCentered">
             <br>
             <br>

        <h2 class="permanentMarkerTitleBig">Inscription aux cours du soir</h2>
        <div class="contentCentered">
        
        <p>Schreift Iech mam Formulaire hei ënnendrënner fir den Owescours vun Ärem Choix an.</p>
        <p>Veuillez vous inscrire dans le cours du soir de votre choix à l'aide du formulaire ci-dessous.</p>
        <p>You can enroll in the evening course of your choice by filling in the following form.</p> 
        <br>
        <br>
        </div>

        </div>

<!--TITRE END -->

        <!-- Formulaire -->

        <div class="greenBackground2 contentCentered formulaire">

            

                

                    <form action="../phpElements/mailCoursDuSoir.php" method="post" id="contactFormMLG"> 

                        <div class="grid-2-col50">

                            <div class="inscription">

                                <table>

                                <tr>

                                    <td class="tdtext">
                                    <p>Numm / Nom / Last name :</p>
                                    </td>
                                    <td>
                                    <input type="text" name="nom" size="40" maxlength="50"  class="inputField2" value="" required /> 
                                    </td>

                                </tr>

                                <tr>

                                    <td class="tdtext">
                                    <p>Virnumm / Prénom / First name :</p>
                                    </td>
                                    <td>
                                    <input type="text" name="prenom" size="40" maxlength="50" class="inputField2" value="" required />
                                    </td>

                                </tr>

                                <tr>

                                    <td class="tdtext">
                                    <p>Matricule de sécurité sociale</p>
                                    <p>Social security number :</p>
                                    </td>
                                    <td>
                                    <input type="number" name="matricule" size="40" minlength="13" maxlength="30" class="inputField2" value="" required />
                                    </td>

                                </tr>

                                <tr>

                                    <td class="tdtext">
                                    <p>Gebuertsdatum / Date de naissance / Birthday :</p>
                                    </td>
                                    <td>
                                    <input type="date" name="dateNaissance" size="40" class="inputField2" value="" required />
                                    </td>

                                </tr>

                                <tr>

                                    <td class="tdtext">
                                    <p>Gebuertsplaz / Lieu de naissance / Birthplace :</p>
                                    </td>
                                    <td>
                                    <input type="text" name="lieuNaissance" size="40" maxlength="50" class="inputField2" value="" required />
                                    </td>

                                </tr>

                                <tr>

                                    <td class="tdtext">
                                    <p>Gebuertsland / Pays de naissance / Country of birth :</p>
                                    </td>
                                    <td>
                                    <input type="text" name="paysNaissance" size="40" maxlength="50" class="inputField2" value="" required />
                                    </td>

                                </tr>

                                <tr>

                                    <td class="tdtext">
                                    <p>Nationalitéit / Nationalité / Nationality :</p>
                                    </td>
                                    <td>
                                    <input type="text" name="nationalite" size="40" maxlength="50" class="inputField2" value="" required />
                                    </td>

                                </tr>

                                    <tr>
                                            <td class="tdtext">
                                            <p>Geschlecht / Sexe / Sex :</p>
                                            </td>
                                            <td class="tdleftalign textvario">
                                                    <input type="radio" name="sexe" value="male">
                                                    <label class="leftalign" for="male">männlech / masculin / male</label><br>
                                                    <input type="radio" name="sexe" value="female">
                                                    <label for="female">weiblech / féminin / female</label><br>
                                                    
                                            </td>

                                    </tr>




                                </table>

                            
                            
                            </div>
            
                                
                            <div class="inscription">

                                <table>

                                   

                                    <tr>

                                        <td class="tdtext">
                                        <p>Adress (Nr, Strooss) / Adresse (nr, rue) / Address (nr, street) :</p>
                                        </td>
                                        <td>
                                        <input type="text" name="adresse" size="40" maxlength="50" class="inputField2" value="" required />        
                                        </td>

                                    </tr>

                                    <tr>

                                        <td class="tdtext">
                                        <p>Code postal / Postal code :</p>
                                        </td>
                                        <td>
                                        <input type="number" name="codePostal" size="40" maxlength="7" class="inputField2" value="" required />       
                                        </td>

                                    </tr>

                                    <tr>

                                        <td class="tdtext">
                                        <p>Uertschaft / Localité / City :</p>
                                        </td>
                                        <td>
                                        <input type="text" name="localite" size="40" maxlength="50" class="inputField2" value="" required />      
                                        </td>

                                    </tr>

                                    <tr>

                                        <td class="tdtext">
                                        <p>Telefon / Téléphone / Phone :</p>
                                        </td>
                                        <td>
                                        <input type="number" name="telephone" size="40" maxlength="50" class="inputField2" value="" required />     
                                        </td>

                                    </tr>

                                    <tr>

                                        <td class="tdtext">
                                        <p>E-Mail-Adress / Courriel / E-mail address :</p>
                                        </td>
                                        <td>
                                        <input type="mail" name="mail" size="40" maxlength="50" class="inputField2" value="" required />  
                                        </td>

                                    </tr>




                                </table>

                                <br>
                                <br>


                                

                              

                                <div class="kiste">

                                    <p>Choix vum Cours / Choix du cours / Choice of course:</p>
                                    <br>
                                    <select id="cours" name="cours">
                                    
                                    <option value="cours 0">Choisir une option</option>

                                    <option value="AR-BOI-6">AR-BOI-6</option>

                                    <option value="AR-CERA-1">AR-CERA-1</option>
                                    <option value="AR-CERA-2">AR-CERA-2</option>
                                    
                                    <option value="AR-COUT-4">AR-COUT-4</option>
                                    <option value="AR-COUT-6">AR-COUT-6</option>
                                    <option value="AR-COUT-24">AR-COUT-24</option>

                                    <option value="AR-PHOT-3">AR-PHOT-3</option>
                                    <option value="AR-PHOT-4">AR-PHOT-4</option>
                                    <option value="AR-PHOT-5">AR-PHOT-5</option>

                                    <option value="AR-PINT-1">AR-PINT-1</option>
                                    <option value="AR-PINT-2">AR-PINT-2</option>
                                    <option value="AR-PINT-3">AR-PINT-3</option>

                                    <option value="AR-SCUL-2">AR-SCUL-2</option>
                                    <option value="AR-TIFF-2">AR-TIFF-2</option>
                                    
                                    <option value="IN-MUME-4">IN-MUME-4</option>
                                    <option value="IN-MUME-5">IN-MUME-5</option>
                                    <option value="IN-MUME-6">IN-MUME-6</option>
                                    <option value="IN-MUME-7">IN-MUME-7</option>
                                    <option value="IN-MUME-8">IN-MUME-8</option>
                                    <option value="IN-MUME-9">IN-MUME-9</option>
                                    <option value="IN-MUME-10">IN-MUME-10</option>
                                    <option value="IN-MUME-11">IN-MUME-11</option>

                                    <option value="IN-PRE-1">IN-PRE-1</option>

                                    <option value="IN-TAB-1">IN-TAB-1</option>

                                    <option value="LA-EN-15">LA-EN-15</option>
                                    <option value="LA-EN-16">LA-EN-16</option>
                                    <option value="LA-EN-17">LA-EN-17</option>

                                    <option value="LA-ES-11">LA-ES-11</option>
                                    <option value="LA-ES-12">LA-ES-12</option>
                                    <option value="LA-ES-13">LA-ES-13</option>
                                    <option value="LA-ES-14">LA-ES-14</option>
                                    <option value="LA-ES-15">LA-ES-15</option>
                                    <option value="LA-ES-16">LA-ES-16</option>
                                    <option value="LA-ES-17">LA-ES-17</option>
                                    <option value="LA-ES-18">LA-ES-18</option>
                                    
                                    <option value="LA-FR-7">LA-FR-7</option>
                                    <option value="LA-FR-8">LA-FR-8</option>
                                    <option value="LA-FR-9">LA-FR-9</option>
                                    <option value="LA-FR-10">LA-FR-10</option>
                                    <option value="LA-FR-12">LA-FR-12</option>
                                    <option value="LA-FR-13">LA-FR-13</option>
                                    <option value="LA-FR-14">LA-FR-14</option>
                                    <option value="LA-FR-15">LA-FR-15</option>
                                    <option value="LA-FR-16">LA-FR-16</option>

                                    <option value="LA-IT-2">LA-IT-2</option>
                                    <option value="LA-IT-3">LA-IT-3</option>
                                    <option value="LA-IT-4">LA-IT-4</option>
                                    <option value="LA-IT-5">LA-IT-5</option>
                                    <option value="LA-IT-6">LA-IT-6</option>
                                    <option value="LA-IT-7">LA-IT-7</option>
                                    <option value="LA-IT-8">LA-IT-8</option>
                                    <option value="LA-IT-21">LA-IT-21</option>
                                    <option value="LA-IT-22">LA-IT-22</option>
                                    <option value="LA-IT-23">LA-IT-23</option>
                                    <option value="LA-IT-44">LA-IT-44</option>
                                    <option value="LA-IT-45">LA-IT-45</option>

                                    <option value="LA-LB-40">LA-LB-40</option>
                                    <option value="LA-LB-42">LA-LB-42</option>
                                    <option value="LA-LB-43">LA-LB-43</option>
                                    <option value="LA-LB-44">LA-LB-44</option>
                                    <option value="LA-LB-45">LA-LB-45</option>
                                    <option value="LA-LB-54">LA-LB-54</option>
                                    <option value="LA-LB-55">LA-LB-55</option>
                                    <option value="LA-LB-56">LA-LB-56</option>
                                    <option value="LA-LB-57">LA-LB-57</option>
                                    <option value="LA-LB-58">LA-LB-58</option>
                                    <option value="LA-LB-59">LA-LB-59</option>
                                    <option value="LA-LB-60">LA-LB-60</option>
                                    <option value="LA-LB-61">LA-LB-61</option>
                                    <option value="LA-LB-64">LA-LB-64</option>
                                    <option value="LA-LB-75">LA-LB-75</option>

                                    <option value="LA-RU-9">LA-RU-9</option>
                                    <option value="LA-RU-10">LA-RU-10</option>
                                    <option value="LA-RU-11">LA-RU-11</option>
                                    <option value="LA-RU-12">LA-RU-12</option>

                                    <option value="SO-YOG-1">SO-YOG-1</option>
                                    <option value="SO-YOG-4">SO-YOG-4</option>
                                    <option value="SO-YOG-5">SO-YOG-5</option>
                                    <option value="SO-YOG-6">SO-YOG-6</option>
                                    <option value="SO-YOG-11">SO-YOG-11</option>


                                    </select>
                                   <br>
                                   <br>
                                    


                                                


                                </div>

                                
                            
                            </div>
                                
                        </div>

                    
                   
                    <br>
                    <br>

                    <input type="submit" value="Schécken / Envoyer / Submit" id="formulaireButton">
                    </form>

                    <br>
                    <br>
                

               

            
        </div>

        <!-- Formulaire END-->

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterBlueCoursDuSoir.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>