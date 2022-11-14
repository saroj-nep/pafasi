<template>
    <Header />

<main class=" pt-4 pb-16 lg:pt-4 lg:pb-24 bg-white dark:bg-gray-900">
  <div id="backbutton" class="ml-40" >
   <button  class="popup-close" title="Zurück" @click="hauptmenu()"  ><img class="h-10 w-10" src="../../src/assets/return.png" alt="Workflow" /> </button>
  </div>
    <header class="mb-8 text-center lg:mb-8 not-format">
           
              <h1 class="mb-8 text-4xl font-extrabold leading-tight text-emerald-600 lg:mb-8 lg:text-4xl dark:text-emerald-600">Willkommen auf der Lernplattform PaFaSi!</h1>
          </header>
  <div class="flex justify-start  mx-auto max-w-screen-xl ">
   <!-- <aside class=" fixed top-0 left-0 w-100 mt-30" aria-label="Sidebar">
   <div class="overflow-y-auto py-4 px-3  rounded ">
      <ul class="space-y-2">
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <span class="ml-3">Grundidee der Lernumgebung:</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <span class="flex-1 ml-3 text-left whitespace-nowrap" >Arbeiten in der Lernplattform PaFaSi:</span>
         </a>
       </li>
         <li> <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <span class="flex-1 ml-3 text-left whitespace-nowrap" >Wartezimmer und Fälle</span></a>
               
          </li>
            <li>
                 <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <span class="flex-1 ml-3 text-left whitespace-nowrap" >Kriterien</span>         
                  </a>
           </li>
                  <li>
                      <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <span class="flex-1 ml-3 text-left whitespace-nowrap" >Kriterien</span>         
                  </a>
                     <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Wirtschaftlichkeit</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Patientenzufriedenheit</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Zeit</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Patientensicherheit</a>
                  </li>
                
                  <li>
                 <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <span class="flex-1 ml-3 text-left whitespace-nowrap" >Notizen Tool</span>         
                  </a>
           </li>
            <li>
                   <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <span class="flex-1 ml-3 text-left whitespace-nowrap" >Laborwerte und Facharzt-Konsile:</span>         
                  </a>
           </li>
           <li>
                   <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <span class="flex-1 ml-3 text-left whitespace-nowrap" >Seite „Heutige Vorstellung beenden und (be-)handeln“</span>         
                  </a>
           </li>
               <li>
                   <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <span class="flex-1 ml-3 text-left whitespace-nowrap" >Fallabschluss. Printout</span>         
                  </a>
           </li>             
       
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <span class="ml-3">Fragen? Probleme?</span>
            </a>
         </li>
         
      </ul>
   </div>
</aside> -->
      
      <article class="mx-auto mt-4 w-full max-w-6xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
        
          <header class="mb-4 mt-4 lg:mb-6 not-format">
           
              <h1 class="mb-4 mt-4 text-3xl font-extrabold leading-tight text-emerald-600  lg:mb-4 lg:mt-4 lg:text-3xl dark:text-emerald-600">Grundidee der Lernumgebung:</h1>
          </header>
           <p class="lead">Die im Rahmen eines Wahlfaches im WS 2022/2023 eingeführte Lernplattform möchte Sie dabei unterstützen, Handlungs- und Entscheidungskompetenzen für die praktische Arbeit als Arzt/Ärztin einzuüben.</p>
<p class="mt-2">Dazu sollen Sie innerhalb des Programmes mit klinischen Fällen arbeiten und dies im Stile des POL (Problem-orientiertes Lernen: TeilnehmerInnen erarbeiten selbstständig das individuell zur Lösung des jeweiligen Falles benötigte Wissen).</p>
<p class="mt-2">Stellen Sie sich vor, Sie haben endlich Ihre Approbation in der Tasche und nehmen als BerufsanfängerIn eine Aushilfsstelle als Ärztin/Arzt in unserer imaginären Hausarztpraxis an. Im Wartezimmer warten verschiedene Patientinnen und Patienten auf Sie. 
</p>

 <header class="mb-4 mt-6  lg:mb-4 lg:mt-6 not-format">
           
              <h1 class="mb-4 mt-6 text-3xl font-extrabold leading-tight text-emerald-600 lg:mb-4 lg:mt-6 lg:text-3xl dark:text-emerald-600">Arbeiten in der Lernplattform PaFaSi:</h1>
          </header>
           <p class="mt-2">In den folgenden Abschnitten werden die verschiedenen Komponenten der PaFaSi-Lernplattform erläutert. Um eine gute Lernerfahrung bei der Nutzung unserer Plattform zu gewährleisten, empfehlen wir Ihnen dringend, die PaFaSi-Lernplattform nur über einen Computer oder ein Laptop aufzurufen. Ein Smartphone oder ein anderes Gerät mit einem kleinen Bildschirm oder ohne physische Tastatur ist nicht geeignet.
</p>
 <header class="mb-4 lg:mb-4 not-format">
              <h1 class="mb-4 mt-4 text-2xl font-bold leading-tight text-emerald-600 lg:mb-4 lg:mt-4 lg:text-2xl dark:text-emerald-600">Wartezimmer und Fälle</h1>
          </header>
             <p class="mt-2">Nachdem Sie im Hauptmenü auf die Schaltfläche „Wartezimmer“ geklickt und dann einen Fall ausgewählt haben, wird sich die betroffene Patientin oder der betreffende Patient zunächst einmal in der Übersicht bei Ihnen vorstellen. Ihnen stehen dann mehrere Schaltflächen mit diagnostischen Handlungsmöglichkeiten zur Verfügung. Klicken Sie auf die jeweilige Schaltfläche, um weitere Optionen zu sehen.</p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/Fallbeschreibung.png"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>

             <p class="mt-6">Sie können jederzeit durch den „Zurück“-Button wieder zurück zur vorherigen Seite gelangen – Ihr Fortschritt und die von Ihnen gewählten Optionen werden dabei gespeichert. Benutzen Sie nicht die "Zurück" Schaltfläche Ihres Webbrowsers, da Sie sonst wieder in den Wartezimmer zurückgebracht werden.</p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/Backbutton.png"
        class="mt-4 max-w-xl h-auto shadow-xl"
        alt="Zurück"
      />
</div>

             <p class="mt-6">Sie können auch jederzeit die Plattform verlassen, um z. B. etwas nachzuschlagen (siehe „Tipps und Links“), und später an derselben Stelle fortfahren.   Wenn Sie Ihre Diagnose schreiben (siehe Abschnitt „Heutige Vorstellung beenden und (be-)handeln“), empfehlen wir Ihnen jedoch, dies in einer Sitzung zu tun.</p>
<p class="mt-2">Um einen bestmöglichen Lernerfolg zu erreichen, möchten wir Sie dazu bitten, sich nicht per „Versuch-und-Irrtum“ durch sämtliche Optionen zu klicken. Aus diesem Grund wird von uns Ihre Leistung (keine Benotung, aber als Diskussionsgrundlage) ausgewertet: in Form der von Ihnen erreichten Wirtschaftlichkeit, Patientenzufriedenheit, Zeit und Patientensicherheit. 
</p>
 <header class="mb-4 lg:mb-4 not-format">
              <h1 class="mb-4 mt-4 text-2xl font-bold leading-tight text-emerald-600 lg:mb-4 lg:mt-4 lg:text-2xl dark:text-emerald-600">Kriterien</h1>
          </header>
          <p class="mt-2">Um Realitätsnähe herzustellen und Ihre spätere Arbeitswirklichkeit zu simulieren, enthalten die Fälle in der PaFaSi-Plattform vier Kriterien: Wirtschaftlichkeit, Patientenzufriedenheit, Zeit und Patientensicherheit. Diese vier Kriterien werden Ihnen neben Ihrer finalen Diagnose helfen, Ihre Leistung in jedem Fall zu bewerten.
</p>
<ul class="list-disc ml-10 mr-10 lg:ml-10 lg:mr-10">
 <li><header class="mb-4  lg:mb-4 not-format">
              <h1 class="list-disc mb-4 mt-4 text-xl font-bold leading-tight text-emerald-600 lg:mb-4  lg:mt-4 lg:text-xl dark:text-emerald-600">Wirtschaftlichkeit</h1>
          </header>
          <p class="mt-2">Dieses Kriterium bezieht sich darauf, dass jeder Patientenfall einen idealen Weg hat, um ihn auf die wirtschaftlich effizienteste Weise zu beurteilen. Dieser ideale Weg wurde von einer Gruppe von Medizinexperten entwickelt und enthält die notwendigen Maßnahmen, die in den Abschnitten “Ausführlichere Anamnese durchführen”, “Laboranordnungen”, “Untersuchen”, “Eine Überweisung zum Facharzt ausstellen” und “Einen Blick in die Patientenakte werfen” ausgewählt werden müssen, um jeden Fall zu verstehen. Auch die Entscheidungen, die Sie unter "heutige Vorstellung beenden..." treffen, gehen in das Kriterium "Wirtschaftlichkeit" mit ein. Um mehr Informationen zu erhalten, lesen Sie die untenstehenden Informationen, die diesen Abschnitt erklären.</p>
 
<p class="mt-2">Es ist wichtig zu wissen, dass das Kriterium “Wirtschaftlichkeit” die Reihenfolge der Aktionen nicht berücksichtigt. Das heißt, wenn die Aktionen A und B Teil des idealen Weges sind, spielt es keine Rolle, ob man zuerst B und dann A macht oder umgekehrt.</p>

<p class="mt-2">Für das Kriterium “Wirtschaftlichkeit” erhalten Sie eine Punktzahl, die zwischen einer negativen Zahl und bis zu 100 liegen kann.

</p> </li>
<li><header class="mb-4  lg:mb-4 not-format">
              <h1 class="list-disc mb-4 mt-4 text-xl font-bold leading-tight text-emerald-600 lg:mb-4  lg:mt-4 lg:text-xl dark:text-emerald-600"> Patientenzufriedenheit</h1>
          </header>
          <p class="mt-2">Dieses Kriterium bewertet die Zufriedenheit der Patientin/des Patienten mit den Maßnahmen (z. B. "Funktionsuntersuchung für Rumpf-Wirbel", "Blutentnahme: Serumelektrophorese"), die Sie ausgewählt haben. Jede ausgewählte Aktion erzeugt eine "traurige" oder "glückliche" Reaktion der Patientin/des Patienten. Die Summe dieser "traurigen" und "glücklichen" Reaktionen wird aufgezeichnet.</p>
<p class="mt-2">Aktionen können je nach Kontext eine "traurige" oder "glückliche" Reaktion hervorrufen (z. B. die Inspektion der unteren Gliedmaßen, wenn der Patient ein Problem mit den oberen Gliedmaßen hat). Allerdings werden einige Aktionen bei allen Patientinnen und Patienten die gleiche Reaktion hervorrufen (z. B. eine Genitaluntersuchung, ob notwendig oder nicht, wird von den Patientinnen und Patienten oft nicht gut aufgenommen).</p>

<p class="mt-2">Es ist wichtig zu wissen, dass es Maßnahmen gibt, die Sie durchführen müssen, um den Fall der Patientin/des Patienten zu verstehen. Diese müssen nicht immer eine "glückliche" Reaktion hervorrufen.</p>

<p class="mt-2">Für das Kriterium “Patientenzufriedenheit” erhalten Sie eine prozentuale Punktzahl von 0 % bis 100 %. Eine höhere Punktzahl für dieses Kriterium bedeutet eine höhere Patientenzufriedenheit.


</p></li>
<li><header class="mb-4  lg:mb-4 not-format">
              <h1 class="list-disc mb-4 mt-4 text-xl font-bold leading-tight text-emerald-600 lg:mb-4  lg:mt-4 lg:text-xl dark:text-emerald-600"> Zeit</h1>
          </header>
          <p class="mt-2">Ob es sich um einen Urin-Sediment-Test oder das Abtasten von Lymphknoten handelt, alle Aktionen, die Sie im wirklichen Leben durchführen, verbrauchen Zeit. Um dies zu simulieren, haben alle Handlungen einen versteckten Wert, der die Zeit angibt, die für die Durchführung einer solchen Handlung im wirklichen Leben erforderlich gewesen wäre. </p>
 
<p class="mt-2">Für dieses Kriterium wird also die Zeit gezählt, die es im wirklichen Leben gebraucht hätte, um alle von Ihnen ausgewählten Aktionen auszuführen. Dazu gehört auch die Zeit, die benötigt wird, um die Ergebnisse einer Laboruntersuchung oder einer Facharztüberweisung zu erhalten.</p>

<p class="mt-2">Für das Kriterium “Zeit” erhalten Sie eine Punktzahl, die von einigen Minuten bis zu Tagen und Wochen reichen kann.
</p></li>
<li><header class="mb-4  lg:mb-4 not-format">
              <h1 class="list-disc mb-4 mt-4 text-xl font-bold leading-tight text-emerald-600 lg:mb-4  lg:mt-4 lg:text-xl dark:text-emerald-600">Patientensicherheit</h1>
          </header>
          <p class="mt-2">Das letzte Kriterium “Patientensicherheit” befindet sich im Abschnitt "Heutige Vorstellung beenden und (be-)handeln" und bezieht sich auf die Sicherheit der Patientin/des Patienten in Bezug auf Ihre Entscheidung, was als Nächstes zu tun ist: vom Rufen eines Krankenwagens und der Durchführung von Notfallmaßnahmen bis hin zu der Aufforderung, in vier Wochen oder nie wiederzukommen.</p>

            <p class="mt-2">Für das Kriterium “Patientensicherheit” erhalten Sie eine prozentuale Punktzahl sowie eine Textinterpretation dieser Punktzahl.</p>

<p class="mt-2">Ihre Leistung in diesen vier Kriterien wird von der Plattform automatisch im Hintergrund gespeichert und ihre endgültigen Werte werden Ihnen angezeigt, sobald Sie den Fall abgeschlossen haben. Weitere Informationen finden Sie, wenn Sie auf die Schaltfläche “Laden Sie Ihre Diagnoseergebnisse herunter” klicken.

</p></li>
</ul>
<header class="mb-4 mt-6  lg:mb-6 lg:mt-6 not-format">
              <h1 class="mb-4 mt-6 text-2xl font-bold leading-tight text-emerald-600 lg:mb-4  lg:mt-6 lg:text-2xl dark:text-emerald-600">Notizen Tool</h1>
          </header>
          <p class="mt-2">Am rechten Bildrand haben Sie die Möglichkeit, Ihre Untersuchungsergebnisse und differentialdiagnostischen Überlegungen in Notizen festzuhalten. </p>

<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/notepad.gif"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>

 <p class="mt-6">Bitte beachten Sie, dass gespeicherte Notizen individuell gelöscht werden können, aber nicht mehr editierbar sind.</p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/deletenote.gif"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>


 <p class="mt-6">Alle Notizen werden Ihnen am Ende in einer druckbaren Ansicht zur Verfügung gestellt. Diese kann Ihnen dann als Gedankenstütze und Diskussionsgrundlage im Seminar dienen.</p>

 <p class="mt-2">Wenn Sie Ihre Diagnostik abgeschlossen haben, klicken Sie auf „Heutige Vorstellung beenden und (be-)handeln“. Tragen Sie dort Ihre Verdachtsdiagnose ein und entscheiden Sie sich unter den angegebenen Möglichkeiten für ein angemessenes weiteres Vorgehen.
</p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/diagnostik.png"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>
<header class="mb-4 mt-6  lg:mb-4 lg:mt-6 not-format">
              <h1 class="mb-4 mt-6 text-2xl font-bold leading-tight text-emerald-600 lg:mb-4 lg:mt-6 lg:text-2xl dark:text-emerald-600"> <span class="text-2xl font-bold leading-tight text-red-600 lg:text-2xl dark:text-red-600">ACHTUNG - </span> Laborwerte und Facharzt-Konsile:</h1>
          </header>
          <p class="mt-2">Um Realitätsnähe herzustellen und Ihre spätere Arbeitswirklichkeit zu simulieren, werden Ihnen Laborergebnisse und Arztbriefe von Fachärzten NICHT SOFORT zur Verfügung gestellt. Wie in einer allgemeinmedizinischen Praxis üblich, müssen Sie auch ohne gesicherte Diagnose ein “für den Moment” bestes weiteres Vorgehen initiieren (Stichworte: abwartendes Offenhalten, abwendbar gefährliche Verläufe). </p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/results.png"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>
           <p class="mt-6"> Die Ergebnisse werden Ihnen dann, sofern Sie diese angefordert haben, nach dem Verabschieden der Patientin/des Patienten zur Verfügung gestellt. Danach haben Sie die Möglichkeit, Ihre therapeutischen Entscheidungen noch einmal zu ändern.

</p>
<header class="mb-4  lg:mb-4 not-format">
              <h1 class="mb-4 mt-4 text-2xl font-bold leading-tight text-emerald-600 lg:mb-4 lg:mt-4 lg:text-2xl dark:text-emerald-600">Seite „Heutige Vorstellung beenden und (be-)handeln“</h1>
          </header>
          <p class="mt-2">Nachdem Sie alle zum Verständnis des Falles erforderlichen Aktionen durchgeführt haben, müssen Sie die Untersuchung der Patientin/des Patienten beenden. Klicken Sie dazu auf die Schaltfläche "Heutige Untersuchung beenden und (be-)handeln", die Sie auf die gleichnamige Seite führt. Beachten Sie, dass Sie nicht zurückgehen können. </p>

          <div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/endexam.png"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>
           <p class="mt-6"> Auf der Seite "Heutige Untersuchung beenden und (be-)handeln" schreiben Sie bitte Ihre Diagnose auf der Grundlage der Informationen, die Sie bisher gesammelt haben. Sie können die Größe des Textfeldes anpassen, indem Sie die untere rechte Ecke gedrückt halten und ziehen. </p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/textbox.gif"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>
          <p class="mt-6">    Wählen Sie die anderen Optionen in den grünen Feldern aus und klicken Sie anschließend auf die Schaltfläche "Patientin/Patienten verabschieden". </p>

           <p class="mt-2">   Wenn Sie sich aufgrund neuer Erkenntnisse dazu entscheiden, Ihren Patienten/Ihre Patientin wieder einzubestellen, haben Sie die Möglichkeit, die Diagnostik noch einmal zu durchlaufen. <span class="text-red-600"> ACHTUNG:</span> Dies ist nur jeweils einmal nach Erhalt der Laborergebnisse und/oder der Facharztbriefe möglich!
</p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/lab.png"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>
<header class="mb-4 lg:mb-4 not-format">
              <h1 class="mb-4 mt-4 text-2xl font-bold leading-tight text-emerald-600 lg:mb-4 lg:mt-4 lg:text-2xl dark:text-emerald-600">Fallabschluss. Printout</h1>
          </header>
          <p class="mt-2">Nachdem Sie auf der Seite "Heutige Untersuchung beenden und (be-)handeln" auf die Schaltfläche "Patientin/Patienten verabschieden" geklickt haben, wird Ihnen die Seite "Fallabschluss" angezeigt. </p>
  <p class="mt-2">  Auf dieser Seite finden Sie Ihre Diagnoseergebnisse, die Ihre Ergebnisse zu jeder der vier Kriterien (siehe Abschnitt "Kriterien" oben) und die Antworten enthalten, die Sie auf der Seite "Heutige Untersuchung beenden und (be-)handeln" gegeben haben. Außerdem finden Sie eine Kopie der Notizen, die Sie während des Falles gemacht haben.</p>

<p class="mt-2">Oben rechts auf dieser Seite finden Sie eine Schaltfläche, mit der Sie einen Ausdruck Ihrer Ergebnisse als pdf-Datei speichern können. Haben Sie dies bitte zum Seminartermin parat.</p>

<p class="mt-2">Auf der Seite “Wartezimmer” wird der Fall nun als abgeschlossen angezeigt. Es erscheint eine Schaltfläche, über die Sie die Zusammenfassung herunterladen können.</p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/pafasidownload.png"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>
<p class="mt-6">Sobald Sie den Fall abschließen, können Sie sich Ihr „Printout“ herunterladen. Haben Sie dieses bitte zum Seminartermin parat. </p>
<div class="mt-4 mb-6 flex flex-wrap justify-center">
  <img
        src="@/assets/pafasiprint.png"
        class="mt-4 max-w-4xl h-auto shadow-xl"
        alt="Fallbeschreibung"
      />
</div>
<header class="mb-4  lg:mb-4 not-format">
              <h1 class="mb-4 mt-6 text-3xl font-bold leading-tight text-emerald-600 lg:mb-4 lg:mt-6 lg:text-3xl dark:text-emerald-600">
Fragen? Probleme?
</h1>
          </header>
          <p class="mt-2">Bei Problemen wenden Sie sich bitte an Ihren Tutor/Ihre Tutorin. Wir wünschen Ihnen viel Spaß und viel Erfolg!
</p>  
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
    created(){
      console.log(localStorage.email)
       if (!(localStorage.email)){this.$router.push("/login");}},
    methods:{
     hauptmenu(){this.$router.push("/main");}}
}
</script>