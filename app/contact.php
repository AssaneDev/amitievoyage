<!DOCTYPE html>
<html lang="en">
<head>
      <?= require_once 'include/head.php'?>
      <link rel="stylesheet" href="/styleform/css/contact.css">
      <title>Contact</title>
</head>
<body>
  <!-- 
    =======================================================================

    This is a working contact form. To receive email, 
    Replace YOUR_ACCESS_KEY_HERE with your actual Access Key.

    Create Access Key here 👉 https://web3forms.com/

     =======================================================================
 -->

  <section class="contact bg-dark">
      <form class="contact-form" action="https://api.web3forms.com/submit" method="POST" id="form">
         <input type="hidden" name="access_key" value="e28c4628-4fe7-4a19-92ad-a539f9dfe6db" />
         <input type="hidden" name="subject" value="New Submission from Web3Forms" />
        <input type="hidden" name="redirect" value="https://web3forms.com/success" />
        <input type="checkbox" name="botcheck" id="" style="display: none;" />

        <h2 class="title">Pour nous <strong>contacter</strong></h2>
        <input type="text" placeholder="Nom" name="name" id="name" />
        <input type="email" placeholder="Email" name="email" id="email" />
        <input type="tel" placeholder="Numéro Téléphone" name="tel" id="">
        <input type="text" name="Adresse" id="adresse" placeholder="adresse">
        <input type="number" placeholder="Nombre de Personne" name="number" id="number">
         <input type="checkbox" name="circuit casamance" id="" value="Circuit Casamance">
        <label for="Type" style="color: white;">Date D'arrivée au Sénégal</label>
        <input type="date" name="date Arrivée" id="">
        <label for="Type" style="color: white;">Date De Départ du Sénégalb,jh</label>
        <input type="date" name="date Retour" id="">
        <label for="Type" style="color: white;">Types de Chambre</label>
        <select name="Type Chambre" id="Type" class="select">
          <option value="Chambre Double">Chambre Double</option>
          <option value="Chambre Single">Chambre Single</option>
        </select>
        
        <input type="text" placeholder="Allergie Alimentaire" name="Allégie" id="Allérgie" />

        <input type="text" placeholder="Votre message ..."name="message" id="message"/>
        <div>
          <button>Soumettre</button>
        </div>
  </form>
</section>
</script>
</body>
</html>

