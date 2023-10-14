
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

        <div class="deco">
        <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxO_8c4Gk&#x2F;watch?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxO_8c4Gk&#x2F;watch?utm_content=DAFxO_8c4Gk&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Blue Collage Nature Nature Sea Summer Travel Video</a> par Assane Diop
        </div>
  </form>
</section>
</script>
</body>
</html>

