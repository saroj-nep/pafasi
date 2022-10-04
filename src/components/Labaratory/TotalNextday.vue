<template>
  <div style="height:80vh; overflow:auto">
    <div >
      <div class=" bg-emerald-600 justify-center">
 <h1 style="font-size:1.5em; " class="h1 text-white text-center" > <b>Die Laborergebnisse, die Sie erhalten haben:</b> </h1>
</div>
<br>
    <div class=" bg-emerald-600">
 <h1 class="h1 text-white " > <b>Ergebnisse der Blutuntersuchung</b> </h1>
</div><br><br>
<div v-for="blood in bloods">
<div v-if="blood.user===email">
<table   class=" border-separate border-spacing-8 border border-emerald-500" >
    <thead class="sticky bg-emerald-200 top-0">
      <tr>
        <th  class="border border-emerald-600 " >Auswahl </th>
        <th class="border border-emerald-600 ">Parameter</th>
        <th class="border border-emerald-600 ">Befund</th>
        <th class="border border-emerald-600 " >Wert</th>
        <th class="border border-emerald-600 ">Referenzbereich</th>
      </tr>
    </thead>
    <tbody v-if="blood.kleines==1" class="border border-emerald-600 "  >
      <tr class="border border-emerald-600 ">
        <td class="bg-emerald-100 border border-emerald-600 ">Kleines Blutbild</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td >Hämoglobin</td>
        <td>g/dl</td>
        <td>10,9</td>
        <td>13-17</td>
      </tr>
      <tr>
        <td></td>
        <td>Hämatokrit</td>
        <td>%</td>
        <td>40</td>
        <td>42-50</td>
      </tr>
      <tr>
        <td></td>
        <td>MCH</td>
        <td>fl</td>
        <td>89</td>
        <td>85-98</td>
      </tr>
      <tr>
        <td></td>
        <td>MCHC</td>
        <td>g/dl</td>
        <td>34</td>
        <td>31-37</td>
      </tr>
      <tr>
        <td></td>
        <td>Leukozyten</td>
        <td>/ul</td>
        <td>6400</td>
        <td>3.800-10.500</td>
      </tr>
      <tr>
        <td></td>
        <td>RDW</td>
        <td>%</td>
        <td>12,3</td>
        <td>11,5-14,5</td>
      </tr>
      <tr>
        <td></td>
        <td>Erythrozyten</td>
        <td>Mio./µl</td>
        <td>5,2</td>
        <td>4,3-5,6</td>
      </tr>
      <tr>
        <td></td>
        <td>MCV</td>
        <td>pg</td>
        <td>31</td>
        <td>28-34</td>
      </tr>
      <tr>
        <td></td>
        <td>Thrombozyte</td>
        <td>1.000/µl</td>
        <td>149</td>
        <td>140-345</td>
      </tr>
    </tbody>
    <tbody v-if="blood.grosses==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Großes Blutbild</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Hämoglobin</td>
        <td>g/dl</td>
        <td>10,9</td>
        <td>13-17</td>
      </tr>
      <tr>
        <td></td>
        <td>Hämatokrit</td>
        <td>%</td>
        <td>40</td>
        <td>42-50</td>
      </tr>
      <tr>
        <td></td>
        <td>MCH</td>
        <td>fl</td>
        <td>89</td>
        <td>85-98</td>
      </tr>
      <tr>
        <td></td>
        <td>MCHC</td>
        <td>g/dl</td>
        <td>34</td>
        <td>31-37</td>
      </tr>
      <tr>
        <td></td>
        <td>Leukozyten</td>
        <td>/ul</td>
        <td>6400</td>
        <td>3.800-10.500</td>
      </tr>
      <tr>
        <td></td>
        <td>RDW</td>
        <td>%</td>
        <td>12,3</td>
        <td>11,5-14,5</td>
      </tr>
      <tr>
        <td></td>
        <td>Erythrozyten</td>
        <td>Mio./µl</td>
        <td>5,2</td>
        <td>4,3-5,6</td>
      </tr>
      <tr>
        <td></td>
        <td>MCV</td>
        <td>pg</td>
        <td>31</td>
        <td>28-34</td>
      </tr>
      <tr>
        <td></td>
        <td>Thrombozyte</td>
        <td>1.000/µl</td>
        <td>149</td>
        <td>140-345</td>
      </tr>
      <tr>
        <td></td>
        <td>Retikulozyten</td>
        <td>%</td>
        <td>1,3</td>
        <td>0,5-2,0</td>
      </tr>
      <tr>
        <td></td>
        <td>stabkernige neutrophile Granulozyten</td>
        <td>%</td>
        <td>3,1</td>
        <td>0-5</td>
      </tr>
      <tr>
        <td></td>
        <td>segmentkernige neutrophile Granulozyten</td>
        <td>%</td>
        <td>61.9</td>
        <td>30-80</td>
      </tr>
      <tr>
        <td></td>
        <td>eosinophile Granulozyten</td>
        <td>%</td>
        <td>1,7</td>
        <td>0-6</td>
      </tr>
      <tr>
        <td></td>
        <td>basophile Granulozyten</td>
        <td>%</td>
        <td>0,1</td>
        <td>0-2</td>
      </tr>
      <tr>
        <td></td>
        <td>Lymphozyten</td>
        <td>%</td>
        <td>27.7</td>
        <td>15-50</td>
      </tr>
      <tr>
        <td></td>
        <td>Monozyten</td>
        <td>%</td>
        <td>5.5</td>
        <td>1-12</td>
      </tr>

    </tbody>
    <tbody v-if="blood.gerin==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Gerinnung</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Quick (Thromboplastinzeit)</td>
        <td></td>
        <td>90</td>
        <td>70-130</td>
      </tr>
      <tr>
        <td></td>
        <td>INR</td>
        <td></td>
        <td>1,03</td>
        <td>0,9-1,2</td>
      </tr>
    </tbody>
    <tbody v-if="blood.entz==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Entzündungsparameter</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>BSG n.1h</td>
        <td>mm/h</td>
        <td>18</td>
        <td>&lt;15</td>
      </tr>
      <tr>
        <td></td>
        <td>CRP</td>
        <td>mg/l</td>
        <td>5,8</td>
        <td>&lt;5</td>
      </tr>
      <tr>
        <td></td>
        <td>Transferrin</td>
        <td>g/l</td>
        <td>3,9</td>
        <td>2,0-3,6</td>
      </tr>
      <tr>
        <td></td>
        <td>Procalcitonin</td>
        <td>ug/l</td>
        <td>0,5</td>
        <td>&lt;0,5</td>
      </tr>
    </tbody>
    <tbody v-if="blood.glucose==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Glucosestoffwechsel</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Glucose</td>
        <td>mg/dl</td>
        <td>135</td>
        <td>70-130</td>
      </tr>
      <tr>
        <td></td>
        <td>HbA1C</td>
        <td>%</td>
        <td>6,0</td>
        <td>&lt;5,7</td>
      </tr>
    </tbody>
    <tbody v-if="blood.fetts==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Fettstoffwechsel</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Cholesterin gesamt</td>
        <td>mm/h</td>
        <td>233</td>
        <td>&lt;200</td>
      </tr>
      <tr>
        <td></td>
        <td>LDL</td>
        <td>mg/dl</td>
        <td>155</td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>HDL</td>
        <td>mg/dl</td>
        <td>65</td>
        <td>&gt;35</td>
      </tr>
      <tr>
        <td></td>
        <td>TAG</td>
        <td>mg/dl</td>
        <td>190</td>
        <td>&lt;150</td>
      </tr>
    </tbody>
    <tbody v-if="blood.eisen==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Eisentoffwechsel</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Eisen</td>
        <td>ug/dl</td>
        <td>58</td>
        <td>50-160</td>
      </tr>
      <tr>
        <td></td>
        <td>Ferritin</td>
        <td>ug/l</td>
        <td>312</td>
        <td>10-400</td>
      </tr>
      <tr>
        <td></td>
        <td>Transferrin</td>
        <td>g/l</td>
        <td>3,9</td>
        <td>2,0-3,6</td>
      </tr>
    </tbody>
    <tbody v-if="blood.leber==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Leber</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Albumin</td>
        <td>g/l</td>
        <td>39</td>
        <td>35-52</td>
      </tr>
      <tr>
        <td></td>
        <td>Cholinesterase</td>
        <td>kU/l</td>
        <td>7</td>
        <td>4,3-11,3</td>
      </tr>
      <tr>
        <td></td>
        <td>AST(GOT)</td>
        <td>U/l</td>
        <td>28</td>
        <td>&lt;38</td>
      </tr>
      <tr>
        <td></td>
        <td>ALT(GPT)</td>
        <td>U/l</td>
        <td>31</td>
        <td>&lt;41</td>
      </tr>
      <tr>
        <td></td>
        <td>GLDH</td>
        <td>U/l</td>
        <td>3</td>
        <td>&lt;7</td>
      </tr>
      <tr>
        <td></td>
        <td>yGT</td>
        <td>U/l</td>
        <td>48</td>
        <td>&lt;60</td>
      </tr>
      <tr>
        <td></td>
        <td>aP</td>
        <td>U/l</td>
        <td>150</td>
        <td>40-130</td>
      </tr>
      <tr>
        <td></td>
        <td>Bilirubin gesamt</td>
        <td>mg/dl</td>
        <td>0.8</td>
        <td>&lt;1,1</td>
      </tr>
      <tr>
        <td></td>
        <td>Bilirubin direkt</td>
        <td>mg/dl</td>
        <td>0.45</td>
        <td>&lt;0,6</td>
      </tr>
    </tbody>
    <tbody v-if="blood.pankreas==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Pancreas</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Amylase</td>
        <td>U/l</td>
        <td>54</td>
        <td>28-100</td>
      </tr>
      <tr>
        <td></td>
        <td>Lipase</td>
        <td>U/l</td>
        <td>48</td>
        <td>13-60</td>
      </tr>
    </tbody>
    <tbody v-if="blood.niere==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Niere</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Keratinin</td>
        <td>mg/dl</td>
        <td>1,5</td>
        <td>&lt;1,1</td>
      </tr>
      <tr>
        <td></td>
        <td>Keratinin Clearance</td>
        <td>ml/min</td>
        <td>120</td>
        <td>&gt;110</td>
      </tr>
      <tr>
        <td></td>
        <td>GFR</td>
        <td>ml/min/1,73m&sup2;</td>
        <td>60</td>
        <td>&gt;90</td>
      </tr>
      <tr>
        <td></td>
        <td>Harnstoff</td>
        <td>mg/dl</td>
        <td>23</td>
        <td>12-50</td>
      </tr>
    </tbody>
    <tbody v-if="blood.electrolyte==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Electrolyte</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Natrium</td>
        <td>mmol/l</td>
        <td>138</td>
        <td>135-145</td>
      </tr>
      <tr>
        <td></td>
        <td>Kalium</td>
        <td>mmol/l</td>
        <td>4,2</td>
        <td>3,6-5,0</td>
      </tr>
      <tr>
        <td></td>
        <td>Chlorid</td>
        <td>mmol/l</td>
        <td>105</td>
        <td>97-108</td>
      </tr>
      <tr>
        <td></td>
        <td>Calcium</td>
        <td>mmol/l</td>
        <td>2,9</td>
        <td>2,2-2,6</td>
      </tr>
      <tr>
        <td></td>
        <td>Magnesium</td>
        <td>mmol/l</td>
        <td>0,98</td>
        <td>0,75-1,05</td>
      </tr>
      <tr>
        <td></td>
        <td>Phosphat</td>
        <td>mmol/l</td>
        <td>1,33</td>
        <td>0,84-1,45</td>
      </tr>
    </tbody>
    <tbody v-if="blood.schild==1">
      <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Schilddrüse/Nebenschildruese</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Calcium</td>
        <td>mmol/l</td>
        <td>2.9</td>
        <td>2,2-2,6</td>
      </tr>
      <tr>
        <td></td>
        <td>Calzitonin</td>
        <td>pg/ml</td>
        <td>7,6</td>
        <td>&lt;9,5</td>
      </tr>
      <tr>
        <td></td>
        <td>Calcitol/ Vit D</td>
        <td>pg/ml</td>
        <td>65,4</td>
        <td>25-86,5</td>
      </tr>
      <tr>
        <td></td>
        <td>Parathormon</td>
        <td>pg/ml</td>
        <td>51</td>
        <td>15-65</td>
      </tr>
      <tr>
        <td></td>
        <td>TSH</td>
        <td>uU/ml</td>
        <td>2,7</td>
        <td>0,4-4,0</td>
      </tr>
      <tr>
        <td></td>
        <td>ft3</td>
        <td>pg/ml</td>
        <td>3,45</td>
        <td>2,0-4,4</td>
      </tr>
      <tr>
        <td></td>
        <td>ft4</td>
        <td>ng/ml</td>
        <td>1,61</td>
        <td>0,93-1,70</td>
      </tr>
      <tr>
        <td></td>
        <td>TRAK (TSH-Rezeptor-Antikörper)</td>
        <td>IU/L</td>
        <td>0.1</td>
        <td>&lt;1,75</td>
      </tr>
      <tr>
        <td></td>
        <td>TPO-Ak (Thyreoperoxidase-Antikörper)</td>
        <td>IU/ml</td>
        <td>12</td>
        <td>&lt;35</td>
      </tr>
      <tr>
        <td></td>
        <td>TAK (Thyreoglobulin-Antikörper</td>
        <td>IU/ml</td>
        <td>55</td>
        <td>&lt;100</td>
      </tr>
    </tbody>
    <tbody v-if="blood.herz==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Herz</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>CK</td>
        <td>U/l</td>
        <td>190</td>
        <td>&lt;190</td>
      </tr>
      <tr>
        <td></td>
        <td>CK-MB</td>
        <td>U/l</td>
        <td>27</td>
        <td>&lt;25</td>
      </tr>
      <tr>
        <td></td>
        <td>Troponin T</td>
        <td>pg/ml</td>
        <td>13,8</td>
        <td>14,0</td>
      </tr>
      <tr>
        <td></td>
        <td>HBDH (α-Hydroxybutyrat-Dehydrogenase)</td>
        <td>U/l</td>
        <td>148</td>
        <td>72-182</td>
      </tr>
    </tbody>
    <tbody v-if="blood.bvitamin==1">
    <tr>
       
        <td class="bg-emerald-100 border border-emerald-600 ">B-Vitamine & Folsäure</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Vit. B1 (Thiamin)</td>
        <td>ug/l</td>
        <td>54</td>
        <td>34-102</td>
      </tr>
      <tr>
        <td></td>
        <td>Vit. B6 (Pyridoxin)</td>
        <td>ug/l</td>
        <td>22</td>
        <td>5-30</td>
      </tr>
      <tr>
        <td></td>
        <td>Vit. B12 (Cobalamin)</td>
        <td>pg/l</td>
        <td>564</td>
        <td>211-911</td>
      </tr>
      <tr>
        <td></td>
        <td>Folsäure</td>
        <td>nmol/l</td>
        <td>15</td>
        <td>7-36</td>
      </tr>
    </tbody>
    <tbody v-if="blood.ldh==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">LDH</td>
        <td></td>
        <td>U/l</td>
        <td>155</td>
        <td>&lt;250</td>
      </tr>
    </tbody>
    <tbody  v-if="blood.harn==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">Harnsäure</td>
        <td></td>
        <td>mg/dl</td>
        <td>5,48</td>
        <td>&lt;7,0</td>
      </tr>
    </tbody>
    <tbody  v-if="blood.psa==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">PSA</td>
        <td></td>
        <td>ng/ml</td>
        <td>6,0</td>
        <td>&lt;4</td>
      </tr>
    </tbody>
    <tbody  v-if="blood.beta==1">
    <tr>
        <td class="bg-emerald-100 border border-emerald-600 ">beta-HCG</td>
        <td></td>
        <td>U/l</td>
        <td>0,5</td>
        <td>&lt;3</td>
      </tr>
    </tbody>
    <tbody v-if="blood.serum==1">
    <tr>
       
        <td class="bg-emerald-100 border border-emerald-600 ">Serumelektrophorese</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Albumin</td>
        <td>%</td>
        <td>58</td>
        <td>54-65</td>
      </tr>
      <tr>
        <td></td>
        <td>α1-Globulin</td>
        <td>%</td>
        <td>2</td>
        <td>2-5</td>
      </tr>
      <tr>
        <td></td>
        <td>α2-Globulin</td>
        <td>%</td>
        <td>9</td>
        <td>7-13</td>
      </tr>
      <tr>
        <td></td>
        <td>β-Globulin</td>
        <td>%</td>
        <td>13</td>
        <td>8-15</td>
      </tr>
      <tr>
        <td></td>
        <td>γ-Globulin</td>
        <td>%</td>
        <td>18</td>
        <td>11-22</td>
      </tr>
    </tbody>
  </table><br><br>
</div>
</div>
  </div>
  <div >
    <div class=" bg-emerald-600">
 <h1 class="h1 text-white " > <b>Ergebnisse des Urintests </b> </h1>
</div><br><br>
<div v-for="urine in urines">
<div v-if="urine.user===email">
   <table class=" border-separate border-spacing-8 border border-emerald-500 " >
    <thead class="sticky bg-emerald-200 top-0">
      <tr>
        <th class="border border-emerald-600 " >Auswahl </th>
        <th class="border border-emerald-600 ">Parameter</th>
        <th class="border border-emerald-600 ">Befund</th>
        <th class="border border-emerald-600 " >Normbereich</th>
      
      </tr>
    </thead>
    <tbody v-if="urine.stix==1"  class="border border-emerald-600  "  >
      <tr class="border border-emerald-600 ">
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 ">U-Stix</td>
        <td></td>
        <td></td>
        <td></td>
       
      </tr>
      <tr style="text-align: center;">
        <td></td>
        <td >Erythrozyten</td>
        <td >-</td>
        <td>-</td>
       
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Leukozyten</td>
        <td>-</td>
        <td>-</td>
       
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Nitrit</td>
        <td>-</td>
        <td>-</td>
        
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Protein</td>
        <td>-</td>
        <td>-</td>
       
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>pH</td>
        <td>5</td>
        <td>&lt;6</td>
        
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Glucose</td>
        <td>-</td>

        <td>&lt;30 mg/dl</td>
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Ketone</td>
        <td>-</td>
     
        <td>-</td>
      </tr>
    </tbody>
    <tbody  v-if="urine.sediment==1">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 ">Urin-Sediment</td>
       
        <td>Standardbefund:</td>
        <td>Unauffälliger Mikroskopiebefund. Keine Bakterien, keine Leukozyten- oder Eiweiß-Zylinder.</td>
      </tr>
      
      

    </tbody>
     <tbody  v-if="urine.kultur==1">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 ">Urin-Kultur</td>
       
        <td>Standardbefund:</td>
        <td>Kein Nachweis antimikrobieller Substanzen. Leukozyten im Urin Negativ. Gesamtkeimzahl &lt;10³ KBE/ml. Folglich kein Anhalt auf Infektion.</td>
      </tr>
      
      

    </tbody>
    </table><br><br>
    </div>
</div>
</div>
<div >
     <div class=" bg-emerald-600">
 <h1 class="h1 text-white " > <b>Ergebnisse des Stuhltests </b> </h1>
</div><br><br>
<div v-for="stool in stools">
<div v-if="stool.user===email">
      <table class=" border-separate border-spacing-8 border border-emerald-500 " >
    <thead class="sticky bg-emerald-200 top-0">
      <tr>
        <th class="border border-emerald-600 " >Auswahl </th>
        <th class="border border-emerald-600 ">Parameter</th>
        <th class="border border-emerald-600 ">Befund</th>
        <th class="border border-emerald-600 " >Normbereich</th>
      
      </tr>
    </thead>
    <tbody v-if="stool.probe==1"  class="border border-emerald-600  "  >
      <tr class="border border-emerald-600 ">
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 ">Stuhlprobe</td>
        <td></td>
        <td></td>
        <td></td>
       
      </tr>
      <tr >
        <td></td>
        <td >FOBT (fäkaler okkulter Bluttest)</td>
        <td >-</td>
        <td>&lt;50 ng/ml</td>
       
      </tr>
      <tr >
        <td></td>
        <td>Calprotectin</td>
        <td>-</td>
        <td>&lt;50 ng/ml</td>
       
      </tr>
      <tr >
        <td></td>
        <td>Elastace</td>
        <td>315</td>
        <td>250-2500 µg/g</td>
     </tr>
    </tbody>
    <tbody  v-if="stool.kultur==1">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 ">Stuhlkulture</td>
       
        <td>Standardbefund:</td>
        <td>Campylobacter, Shigellen, Salmonellen, Yersinien negativ.</td>
      </tr>
    </tbody>
     <tbody  v-if="stool.untersuchung==1">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 ">Untersuchung auf Parasiten</td>
       
        <td>Standardbefund:</td>
        <td>kein Nachweis.</td>
      </tr>
    </tbody>
    </table>
    </div>
  </div>
  </div>
  <div class="flex flex-row  justify-center items-center">
   <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('beendenTrigger')">
           <h3 style="font-size:1em;">Weiter</h3>
   </button>
   </div>

         
          <Popup v-if="popupTriggers.beendenTrigger" :TogglePopup="() => TogglePopup('beendenTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
               <Afterlab />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
  </div>
</template>

<script>
    import Popup from '@/components/Popup2.vue';
    import { ref } from 'vue';
    import Notepad from '@/components/Notepad.vue';
   import axios from "axios";
   import Afterlab from '@/components/Afterlab.vue';
  

    
    export default {
     name:"Alllab",
      data() {
        return {
          bloods: [],
          urines:[],
          stools:[],
          showTooltip: false,
          showNotepad: false,
          email:localStorage.email,
        };
      },
    
    created(){this.allbloods();this.allurines();this.allstools()},
    methods: {
    allbloods() {
        

    axios.get( "./Api/api.php?action=getblood",)
    
    .then((response) => {this.bloods=response.data })
    
  },
    allurines() {
        

    axios.get( "./Api/api.php?action=geturine",)
    
    .then((response) => {this.urines=response.data })
    
  },
    allstools() {
        

    axios.get( "./Api/api.php?action=getstool",)
    
    .then((response) => {this.stools=response.data })
    
  },
    },
    
    
    
      setup() {
        const popupTriggers = ref({
          buttonTrigger: false
        })
        const TogglePopup = (trigger) => {
          console.log(trigger, 'trigger')
          popupTriggers.value[trigger] = !popupTriggers.value[trigger]
        }
        return {
          Popup,
          popupTriggers,
          TogglePopup
        }
      },
      
      components: {Notepad, Popup, Afterlab}
    }
    </script>
    
    <style scoped>
    .submitbutton{
      background: #be123c;
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin: 10px auto;
      min-height: 50px;
      
      cursor: pointer;
      align-self: center;
      justify-self: center;
      /* color: #444   */
    }
    .button {
      background: black;
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin: 10px auto;
      width:200px;
      /* width: 20%; */
      cursor: pointer;
      /* color: #444   */
    }
    
    .h1{
     font-size: large; 
    }
    
    .tooltip {
      position: relative;
      display: inline-block;
      /* border-bottom: 1px dotted black; */
    }
    
    .tooltip .tooltiptext {
      visibility: hidden;
      width: 120px;
      background-color: black;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
    
      /* Position the tooltip */
      position: absolute;
      z-index: 100;
    }
    
    .tooltip:hover .tooltiptext {
      visibility: visible;
    }
    
    .tooltip .tooltiptext {
      visibility: hidden;
      width: 120px;
      background-color: black;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
    
      /* Position the tooltip */
      position: absolute;
      z-index: 100;
    }
    
    .tooltip:hover .tooltiptext {
      visibility: visible;
    }
    </style>
    