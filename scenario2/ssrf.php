<p>Cet utilitaire permet d'afficher un image à partir du lien d'une image fournit</p>
<form method="post">
    <label for="">Entrer le lien d'une image</label><br>
    <input type="text" name="url">
    <input type="submit" value="Soumettre" name="sub">
</form>

<?php
// Si on soumet "file:///etc/passwd" par exemple on peut voir le contenu du fichier passwd du serveur
if (isset($_POST['sub'])){
    $url = $_POST['url'];
    if(!empty($url)){
        $file = fopen($url, 'rb');
        print '<pre>';
        fpassthru($file);
        print '</pre>';
    } else {
        print 'Merci de remplir le champs';
    }
}
?>
