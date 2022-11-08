<template>
    <Header />
<main class=" pt-4 pb-16 lg:pt-4 lg:pb-24 bg-white dark:bg-gray-900">
  <div id="backbutton" class="ml-40" >
   <button  class="popup-close" title="Zurück" @click="hauptmenu()"  ><img class="h-10 w-10" src="../../src/assets/return.png" alt="Workflow" /> </button>
  </div>
  <div class="flex justify-start  mx-auto max-w-screen-xl ">
 
      <article class="mx-auto mt-4 w-full max-w-6xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
        
          <header class="mb-4 mt-4 lg:mb-6 not-format">
           
              <h1 class="mb-4 mt-4 text-2xl font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-3xl dark:text-emerald-600">Kleingedrucktes</h1>
          </header>
           <p class="lead">Diese Seite wurde im Rahmen des Lehrprojekts „POL (Problem-orientiertes Lernen) meets e-learning: Patientenfallsimulator“ im Jahr 2022 am Universitätsklinikum Homburg erstellt. Es handelt sich hierbei um eine Kooperation des Instituts für Pharmakologie und Toxikologie, Uniklinikum Homburg (Jun.-Prof. Dr. Daniela Yildiz), des Zentrums für Allgemeinmedizin, Uniklinikum Homburg (Prof. Johannes Jäger) sowie dem Lehrstuhl Educational Technology, Universität des Saarlandes (Prof. Armin Weinberger).
</p>
<header class="mb-4 mt-4 lg:mb-6 not-format">
           
              <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Autoren:</h1>
          </header>
           <ul class=" ml-10 mr-10 lg:ml-10 lg:mr-10">
<li>
    <p class="mt-2">Carolin Thiel (Aufbau und Patientenfälle)</p>
</li>
<li>
    <p >Miguel Angel Rejon Zamudio (Inhalte und Produktarchitektur)</p>
</li>
<li>
    <p >Saroj Sharma (Webdesign und visuelle Gestaltung)</p>
</li>
           </ul>
    <p class="mt-4">
Sämtliche Inhalte sind geistiges Eigentum der oben genannten Autorin und der Autoren.
Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der bestimmungsgemäßen Nutzung der Inhalte im Rahmen der zugehörigen Lehrveranstaltung sind nicht gestattet.
</p>
     <p class="mt-2">Die dargestellten Patientenhistorien sind frei erfunden. Jegliche Ähnlichkeit oder Überschneidung zu realen Personen sind zufällig.</p>  
      <header class="mb-4 mt-4 lg:mb-6 not-format">
           
              <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Quellenangaben für die verwendeten Daten, Bilder und Grafiken:</h1>
          </header>
     <p class="mt-2">Quellen: </p>      
        <ul class=" list-disc ml-10 mr-10 lg:ml-10 lg:mr-10">

<li>
    <p class="mt-2">AWMF-Leitlinie „Spezifischer Kreuzschmerz”, 2018.  </p>
</li>
<li>
    <p class="mt-2">AWMF „Nationale Versorgungsleitlinie Kreuzschmerz“ zum nicht spezifischen Kreuzschmerz, 2018.</p>
</li>

<li>
    <p class="mt-2">DEGAM Leitlinie Nr.3, „Kreuzschmerz”, 2003. </p>
</li>
<li>
    <p class="mt-2">Gesenhues S., Gesenhues A., Weltermann B. (Hrsg.): Praxisleitfaden Allgemeinmedizin. 8. Auflage, Elsevier, 2017. .</p>
</li>
<li>
    <p class="mt-2">Gruene S. & Schölmerich J. (Hrsg.): Anamnese, Untersuchung, Diagnose. Heidelberg: Springer, 2007.  </p>
</li>
<li>
    <p class="mt-2">Herold, Gerd (Hrsg.): Innere Medizin, Köln, 2020.</p>
</li>
<li>
    <p class="mt-2">Hofer, Matthias: Sono Grundkurs Abdomen, 2015, Mediathek der Heinrich Heine Universität Düsseldorf (mediathek.hhu.de/playlist/180) (abgerufen am 23.10.2022). Lizenz:  
        <a href="https://creativecommons.org/licenses/by/3.0/de/" target="_blank" rel="noopener noreferrer" >
                   <span class="text-blue-600">https://creativecommons.org/licenses/by/3.0/de/
</span></a></p>
</li>
<li>
    <p class="mt-2">Sonografie-Atlas der Universität Erlangen <a href="https://sonographie.org" target="_blank" rel="noopener noreferrer" >
                   <span class="text-blue-600">(www.sonographie.org)
</span></a></p>
</li>
           </ul>    
    <p class="mt-2 mb-2">Bildquellen: </p> 
 <ul class=" list-disc ml-10 mr-10 lg:ml-10 lg:mr-10">   
<li>
    <p class="mt-2">Titelbild zu Patient 1, Herr Schneider: Bild von <a href="https://pixabay.com/de/users/geralt-9301/" target="_blank" rel="noopener noreferrer" >
                   <span class="text-blue-600">Gerd Altmann
</span></a> auf <a href="https://pixabay.com/de" target="_blank" rel="noopener noreferrer"> <span class="text-blue-600"> Pixabay</span></a> </p>
</li>
<li>
    <p class="mt-2">Titelbild zu Patient 2, 
        (<a href="https://www.flickr.com/photos/terrasidius/2300402805" target="_blank" rel="noopener noreferrer" > 

   <span class="text-blue-600"> Herr Hirtz: „After drunken night at Chris' II_MMVI“</span></a> von <a href="https://www.flickr.com/photos/terrasidius/" target="_blank" rel="noopener noreferrer" >
     <span class="text-blue-600">D. Sinclair Terrasidius </span> </a>, lizensiert unter <a href="https://creativecommons.org/licenses/by/2.0/" target="_blank" rel="noopener noreferrer" >

     <span class="text-blue-600"> CC BY 2.0</span> </a> </p>
</li>
<li>
    <p class="mt-2">Titelbild zu Patient 3, Frau Meier: Bild von <a href=
        "https://pixabay.com/de/users/skullman-914392/" target="_blank" rel="noopener noreferrer" >
                   <span class="text-blue-600">Ingela Skullman
</span></a> auf <a href="https://pixabay.com/de" target="_blank" rel="noopener noreferrer"> <span class="text-blue-600"> Pixabay</span></a> </p>
</li>
<li>
    <p class="mt-2">Bild auf der Anmeldeseite,„concept of e-health or tele-medicine“ von <a href=
        "https://stock.adobe.com/de/images/concept-of-e-health-or-telemedicine-graphic-of-health-care-application-on-device-with-medical-icons/241501013?prev_url=detail" target="_blank" rel="noopener noreferrer" >
                   <span class="text-blue-600">Jackie Niam
</span></a> auf <a href="https://stock.adobe.com/de" target="_blank" rel="noopener noreferrer"> <span class="text-blue-600">Adobe Stock: Stadard License/ Datei Nr: 241501013</span></a> </p>
</li>
<li>
    <p class="mt-2">Bild des Titels der Website von <a href=
        "https://stock.adobe.com/de/images/composition-of-doctor-silhouette-with-copy-space-on-blue-background/439905130" target="_blank" rel="noopener noreferrer" >
                   <span class="text-blue-600">vectorfusionart
</span></a> auf <a href="https://stock.adobe.com/de" target="_blank" rel="noopener noreferrer"> <span class="text-blue-600">Adobe Stock: Stardard License/ Datei Nr: 439905130</span></a> </p>
</li>
<li>
    <p class="mt-2">Bild der Schaltfläche zum Ausloggen von <a href=
        "https://stock.adobe.com/de/images/close-up-of-doctor-lab-cloth-and-stethoscope-with-copy-space-medical-and-healthcare-concept-background-paper-art-cut-and-craft-style/292460062" target="_blank" rel="noopener noreferrer" >
                   <span class="text-blue-600">MrArtHit
</span></a> auf <a href="https://stock.adobe.com/de" target="_blank" rel="noopener noreferrer"> <span class="text-blue-600">Adobe Stock: Stardard License/ Datei Nr: 292460062</span></a> </p>
</li>
</ul> 
       
       <header class="mb-4 mt-4 lg:mb-6 not-format">
           
              <h1 class="mb-4 mt-4 text-2xl font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-3xl dark:text-emerald-600">Datenschutzerklärung </h1>
          </header>
             <header class="mb-4 mt-4 lg:mb-6 not-format">
           
              <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Namen und die Kontaktdaten des Verantwortlichen:  </h1>
          </header>
           <p class="mt-2">Miguel A. Rejón Zamudio </p> 
           <p >Bildungstechnologie und Wissensmanagement</p>
           <p >Universität des Saarlandes</p>
            <p >Campus</p>
          <p >66123 Saarbrücken</p>
           <p >m.rejon@edutech.uni-saarland.de</p>
            <p >Tel.: 0681 302-71257  </p>


    <header class="mb-4 mt-4 lg:mb-6 not-format">
           
              <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Datenschutzbeauftragte</h1>
          </header>    
<p class="mt-2">Datenschutzbeauftragter der Universität des Saarlandes</p> 
           <p >Standort Meerwiesertalweg 15</p>
           <p >Bauteil 8 / Ebene 0 / Raum 018</p>
            <p >66123 Saarbrücken</p>
          <p >datenschutz@uni-saarland.de</p>
           <p >Tel.: 0681/302-2813   </p>
       
  <header class="mb-4 mt-4 lg:mb-6 not-format">
            <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Zwecke und Umfang der Verarbeitung personenbezogener Daten:</h1>
          </header>
      <p class="mt-2">Die während der Teilnahme an dem Seminar  erhobenen Daten werden nur für wissenschaftliche Zwecke gesammelt. Die erhobenen Daten bestehen aus demografischen Angaben sowie einstellungs- und verhaltensbezogenen Daten, die durch Angaben in der PaFaSi Plattform und anderen Angaben während der Seminarteilnahme generiert werden. Alle Informationen und Daten sind anonymisiert.</p>
      <p class="mt-2" >Die Verarbeitung personenbezogener Daten der Nutzer erfolgt regelmäßig nur nach Einwilligung des Nutzers.</p>  
    
<header class="mb-4 mt-4 lg:mb-6 not-format">
            <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Rechtsgrundlage für die Verarbeitung personenbezogener Daten</h1>
          </header>
      <p class="mt-2">Soweit die Universität des Saarlandes für Verarbeitungsvorgänge personenbezogener Daten eine Einwilligung der betroffenen Person einholt, dient Art. 6 Abs. 1 lit. a EU-Datenschutzgrundverordnung (DSGVO) als Rechtsgrundlage.</p>

  <header class="mb-4 mt-4 lg:mb-6 not-format">
            <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Datenlöschung und Speicherdauer</h1>
          </header>
      <p class="mt-2">Die personenbezogenen Daten der betroffenen Person werden gelöscht oder gesperrt, sobald der Zweck der Speicherung entfällt. Eine Speicherung kann darüber hinaus erfolgen, wenn dies durch den europäischen oder nationalen Gesetzgeber in unionsrechtlichen Verordnungen, Gesetzen oder sonstigen Vorschriften, denen der Verantwortliche unterliegt, vorgesehen wurde. Eine Sperrung oder Löschung der Daten erfolgt auch dann, wenn eine durch die genannten Normen vorgeschriebene Speicherfrist abläuft, es sei denn, dass eine Erforderlichkeit zur weiteren Speicherung der Daten für einen Vertragsabschluss oder eine Vertragserfüllung besteht.</p>
     
      <header class="mb-4 mt-4 lg:mb-6 not-format">
            <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Recht auf Auskunft und Abänderung über die betreffenden personenbezogenen Daten. Widerspruchsrechts</h1>
          </header>
      <p class="mt-2">Sie haben das Recht auf Auskunft seitens des Verantwortlichen über die betreffenden personenbezogenen Daten sowie auf Berichtigung oder Löschung oder auf Einschränkung der Verarbeitung oder eines Widerspruchsrechts gegen die Verarbeitung sowie des Rechts auf Datenübertragbarkeit. Um dieses Recht auszuüben, wenden Sie sich bitte an den oben angegebenen Verantwortlichen.</p>
     
      <header class="mb-4 mt-4 lg:mb-6 not-format">
            <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Widerrufsrecht</h1>
          </header>
      <p class="mt-2">Sie haben das Recht, die Einwilligung jederzeit zu widerrufen, ohne dass die Rechtmäßigkeit der aufgrund der Einwilligung bis zum Widerruf erfolgten Verarbeitung berührt wird. Um dieses Recht auszuüben, wenden Sie sich bitte an den oben angegebenen Verantwortlichen.</p>
      
      <header class="mb-4 mt-4 lg:mb-6 not-format">
            <h1 class="mb-4 mt-4 text-lg font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-lg dark:text-emerald-600">Beschwerderechts bei einer Aufsichtsbehörde</h1>
          </header>
      <p class="mt-2">Um Ihr Beschwerderecht bei einer Aufsichtsbehörde auszuüben, wenden Sie sich bitte an:</p>
      
      <p class="mt-2">Datenschutzbeauftragter der Universität des Saarlandes</p> 
           <p >Standort Meerwiesertalweg 15</p>
           <p >Bauteil 8 / Ebene 0 / Raum 018</p>
            <p >66123 Saarbrücken</p>
          <p >datenschutz@uni-saarland.de</p>
           <p >Tel.: 0681/302-2813   </p>
    
    
    </article>
  </div>
</main> 
    
</template>
<script>
import Header from '@/components/DefaultLayout'

export default{
    components:{
        
        Header
    },
 methods:{
     hauptmenu(){this.$router.push("/main");}}
}
</script>