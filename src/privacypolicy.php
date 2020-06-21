<!DOCTYPE html>
<html lang="de">
    <?php 
        session_start(); 
        $title = "Datenschutzerklärung";
        include_once($_SERVER['DOCUMENT_ROOT'] . "/formular/happypets/inc/config.php");
        include('../inc/header_min.php');
    ?>
    
    <body id="page-top">
        <div class="m-5 b-5"><hr></div>  <!-- Spacer -->
        <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-2">
                <!-- Linke Seite -->
            </div>
            <div class="col-xs-4 col-sm-6 col-md-8">
                <p><strong><big>Datenschutzerklärung</big></strong></p>
                <p><strong>Allgemeiner Hinweis und Pflichtinformationen</strong></p>
                <p><strong>Benennung der verantwortlichen Stelle</strong></p>
                <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
                <p><span id="s3-t-firma">HappyPets</span><br><span id="s3-t-strasse">Strießhardt 16</span><br><span id="s3-t-plz">53804</span> <span id="s3-t-ort">Much</span></p><p></p>
                <p>Die verantwortliche Stelle entscheidet allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z.B. Namen, Kontaktdaten o. Ä.).</p>

                <p><strong>Widerruf Ihrer Einwilligung zur Datenverarbeitung</strong></p>
                <p>Nur mit Ihrer ausdrücklichen Einwilligung sind einige Vorgänge der Datenverarbeitung möglich. Ein Widerruf Ihrer bereits erteilten Einwilligung ist jederzeit möglich. Für den Widerruf genügt eine formlose Mitteilung per E-Mail. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.</p>

                <p><strong>Recht auf Beschwerde bei der zuständigen Aufsichtsbehörde</strong></p>
                <p>Als Betroffener steht Ihnen im Falle eines datenschutzrechtlichen Verstoßes ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde bezüglich datenschutzrechtlicher Fragen ist der Landesdatenschutzbeauftragte des Bundeslandes, in dem sich der Sitz unseres Unternehmens befindet. Der folgende Link stellt eine Liste der Datenschutzbeauftragten sowie deren Kontaktdaten bereit: <a href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html" target="_blank">https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html</a>.</p>

                <p><strong>Recht auf Datenübertragbarkeit</strong></p>
                <p>Ihnen steht das Recht zu, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines Vertrags automatisiert verarbeiten, an sich oder an Dritte aushändigen zu lassen. Die Bereitstellung erfolgt in einem maschinenlesbaren Format. Sofern Sie die direkte Übertragung der Daten an einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p>

                <p><strong>Recht auf Auskunft, Berichtigung, Sperrung, Löschung</strong></p>
                <p>Sie haben jederzeit im Rahmen der geltenden gesetzlichen Bestimmungen das Recht auf unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, Herkunft der Daten, deren Empfänger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Diesbezüglich und auch zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit über die im Impressum aufgeführten Kontaktmöglichkeiten an uns wenden.</p>

                <p><strong>SSL- bzw. TLS-Verschlüsselung</strong></p>
                <p>Aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, die Sie an uns als Seitenbetreiber senden, nutzt unsere Website eine SSL-bzw. TLS-Verschlüsselung. Damit sind Daten, die Sie über diese Website übermitteln, für Dritte nicht mitlesbar. Sie erkennen eine verschlüsselte Verbindung an der „https://“ Adresszeile Ihres Browsers und am Schloss-Symbol in der Browserzeile.</p>

                <p><strong>Registrierung auf dieser Website</strong></p>
                <p>Zur Nutzung bestimmter Funktionen können Sie sich auf unserer Website registrieren. Die übermittelten Daten dienen ausschließlich zum Zwecke der Nutzung des jeweiligen Angebotes oder Dienstes. Bei der Registrierung abgefragte Pflichtangaben sind vollständig anzugeben. Andernfalls werden wir die Registrierung ablehnen.</p>
                <p>Im Falle wichtiger Änderungen, etwa aus technischen Gründen, informieren wir Sie per E-Mail. Die E-Mail wird an die Adresse versendet, die bei der Registrierung angegeben wurde.</p>
                <p>Die Verarbeitung der bei der Registrierung eingegebenen Daten erfolgt auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Ein Widerruf Ihrer bereits erteilten Einwilligung ist jederzeit möglich. Für den Widerruf genügt eine formlose Mitteilung per E-Mail. Die Rechtmäßigkeit der bereits erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.</p>
                <p>Wir speichern die bei der Registrierung erfassten Daten während des Zeitraums, den Sie auf unserer Website registriert sind. Ihren Daten werden gelöscht, sollten Sie Ihre Registrierung aufheben. Gesetzliche Aufbewahrungsfristen bleiben unberührt.</p>

                <p><strong>Kontaktformular</strong></p>
                <p>Per Kontaktformular übermittelte Daten werden einschließlich Ihrer Kontaktdaten gespeichert, um Ihre Anfrage bearbeiten zu können oder um für Anschlussfragen bereitzustehen. Eine Weitergabe dieser Daten findet ohne Ihre Einwilligung nicht statt.</p>
                <p>Die Verarbeitung der in das Kontaktformular eingegebenen Daten erfolgt ausschließlich auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Ein Widerruf Ihrer bereits erteilten Einwilligung ist jederzeit möglich. Für den Widerruf genügt eine formlose Mitteilung per E-Mail. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.</p>
                <p>Über das Kontaktformular übermittelte Daten verbleiben bei uns, bis Sie uns zur Löschung auffordern, Ihre Einwilligung zur Speicherung widerrufen oder keine Notwendigkeit der Datenspeicherung mehr besteht. Zwingende gesetzliche Bestimmungen - insbesondere Aufbewahrungsfristen - bleiben unberührt.</p>

                <p><strong>Speicherdauer von Beiträgen und Kommentaren</strong></p>
                <p>Beiträge und Kommentare sowie damit in Verbindung stehende Daten, wie beispielsweise IP-Adressen, werden gespeichert. Der Inhalt verbleibt auf unserer Website, bis er vollständig gelöscht wurde oder aus rechtlichen Gründen gelöscht werden musste.</p>
                <p>Die Speicherung der Beiträge und Kommentare erfolgt auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Ein Widerruf Ihrer bereits erteilten Einwilligung ist jederzeit möglich. Für den Widerruf genügt eine formlose Mitteilung per E-Mail. Die
                    Rechtmäßigkeit bereits erfolgter Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.</p>

                <p><strong>Google Web Fonts</strong></p>
                <p>Unsere Website verwendet Web Fonts von Google. Anbieter ist die Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</p>
                <p>Durch den Einsatz dieser Web Fonts wird es möglich Ihnen die von uns gewünschte Darstellung unserer Website zu präsentieren, unabhängig davon welche Schriften Ihnen lokal zur Verfügung stehen. Dies erfolgt über den Abruf der Google Web Fonts von einem Server von Google in den USA und der damit verbundenen Weitergabe Ihre Daten an Google. Dabei handelt es sich um Ihre IP-Adresse und welche Seite Sie bei uns besucht haben. Der Einsatz von Google Web Fonts erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Als Betreiber dieser Website haben wir ein berechtigtes Interesse an der optimalen Darstellung und Übertragung unseres Webauftritts.</p>
                <p>Das Unternehmen Google ist für das us-europäische Datenschutzübereinkommen "Privacy Shield" zertifiziert. Dieses Datenschutzübereinkommen soll die Einhaltung des in der EU geltenden Datenschutzniveaus gewährleisten.</p>
                <p>Einzelheiten über Google Web Fonts finden Sie unter: <a href="https://www.google.com/fonts#AboutPlace:about">https://www.google.com/fonts#AboutPlace:about</a> und weitere Informationen in den Datenschutzbestimmungen von Google: <a href="https://policies.google.com/privacy/partners?hl=de">https://policies.google.com/privacy/partners?hl=de</a></p>
                <p><small>Quelle: Datenschutz-Konfigurator von <a href="http://www.mein-datenschutzbeauftragter.de" target="_blank">mein-datenschutzbeauftragter.de</a></small></p>

            </div>
            <div class="col-xs-4 col-sm-3 col-md-2">
                <!-- Rechte Seite -->
            </div>
        </div>
        <?php include('../inc/footer.php'); ?>

        <!-- Bootstrap core JavaScript -->
        <?php echo'<script src="'. $path['vendor'] .'/jquery/jquery.min.js"></script>'?>
        <?php echo'<script src="'. $path['vendor'] .'/bootstrap/js/bootstrap.bundle.min.js"></script>'?>

        <!-- Plugin JavaScript -->
        <?php echo'<script src="'. $path['vendor'] .'/jquery-easing/jquery.easing.min.js"></script>'?>

        <!-- Contact form JavaScript -->
        <?php echo'<script src="'. $path['js'] .'/jqBootstrapValidation.js"></script>'?>
        <?php echo'<script src="'. $path['js'] .'/contact_me.js"></script>'?>

        <!-- Custom scripts for this template -->
        <script src="js/agency.min.js"></script>

    </body>
</html>