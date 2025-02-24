<div class="container">
  <main>
    <div class="row g-5">

      <div class="col-md-6 col-lg-4 order-md-last">
        <!-- 
        t.a. mm/Hg
        f.c. 90 x min
        f.r. 20 x min
        circun. abdom. 60 cm
        
        temp. 35.2 c°
        peso 43.5 kg
        talla 1.48 cm
        imc 19.59 kg/m2
        
        alergias negadas        
        -->
        <div class="div-12">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary text-capitalize">examen físico:</span>
            <button type="button" class="btn btn-primary d-md-none d-lg-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"></path></svg></button>
          </h4>
          <ul class="list-group mb-3">
            
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 text-capitalize">t.a.</h6>
                <small class="text-body-secondary">Tensión Arterial</small>
              </div>
              <input type="text" class="form-control" id="efTensionArterial" placeholder="000/0 mm/Hg" style="width: 35%;">
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 text-capitalize">f.c.</h6>
                <small class="text-body-secondary">frecuencia cardiaca</small>
              </div>
              <input type="text" class="form-control" id="efFrecuenciaCardiaca" placeholder="000 Bpm" style="width: 35%;">
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 text-capitalize">f.r.</h6>
                <small class="text-body-secondary">frecuencia respiratoria</small>
              </div>
              <input type="text" class="form-control" id="efFrecuenciaRespiratoria" placeholder="00 x min" style="width: 35%;">
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 text-capitalize">circun. abdom.</h6>
                <small class="text-body-secondary">circunferencia abdominal</small>
              </div>
              <input type="text" class="form-control" id="efCirAbd" placeholder="000 cm" style="width: 35%;">
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 text-capitalize">temp.</h6>
                <small class="text-body-secondary">temperatura</small>
              </div>
              <input type="text" class="form-control" id="efTemp" placeholder="00 c" style="width: 35%;">
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 text-capitalize">peso</h6>
                <small class="text-body-secondary">peso</small>
              </div>
              <input type="text" class="form-control" id="efPeso" placeholder="00 kg" value="" style="width: 35%;">
            </li>
   
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 text-capitalize">altura</h6>
                <small class="text-body-secondary">altura</small>
              </div>
              <input type="text" class="form-control" id="efAltura" placeholder="000 cm" value="" style="width: 35%;">
            </li>            

            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 text-capitalize">i.m.c.</h6>
                <small class="text-body-secondary">indice de masa corporal</small>
              </div>
              <input type="text" class="form-control" id="efImc" placeholder="00 ICM" value="" style="width: 35%;" disabled>
            </li>     

          </ul>
        </div>

        <hr class="my-4">

        <div class="div-12">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary text-capitalize">hábitos tóxicos:</span>
            <button type="button" class="btn btn-primary d-md-none d-lg-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"></path></svg></button>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Alcohol</h6>
              </div>
              <select class="form-select" id="htAlcohol" required="" style="width:50%;">
                <option value="">Opciones</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Tabaco</h6>
              </div>
              <select class="form-select" id="htTabaco" required="" style="width: 50%;">
                <option value="">Opciones</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Drogas</h6>
              </div>
              <select class="form-select" id="htDrogas" required="" style="width:50%;">
                <option value="">Opciones</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </li>
          </ul>
        </div>

        <hr class="my-4">
        
        <div class="div-12">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary text-capitalize">alergias:</span>
            <button type="button" class="btn btn-primary d-md-none d-lg-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"></path></svg></button>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">alergias declaradas</h6>
              </div>
              <select class="form-select" id="htAlergias" required="" style="width:50%;">
                <option value="x">Opciones</option>
                <option value="si">Si</option>
                <option value="no">No</option>
              </select>
            </li>
          </ul>
          <textarea class="form-control" id="htAlergiasTxt" rows="3"></textarea>
        </div>   

      </div>

      <div class="col-md-6 col-lg-8">

        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Consulta</span>
          <button type="button" class="btn btn-primary d-md-none d-lg-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"></path></svg></button>
        </h4>

        <div class="row g-3">
          <div class="col-12">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Antecedentes de enfermedad actual</label>
              <textarea class="form-control" id="cAntecedentesEnfermedades" rows="3"></textarea>
            </div>
          </div>
        </div>

        <hr class="my-4">

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">indicaciones generales</label>
          <textarea class="form-control" id="cIndicaciones" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">observaciones</label>
          <textarea class="form-control" id="cObservaciones" rows="3"></textarea>
        </div>  

        <hr class="my-4">

        <div class="row g-3">
          <div class="col-12">

            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Receta</span>
              <button type="button" class="btn btn-primary d-md-none d-lg-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"></path></svg>
              </button>  
            </h4>
        
            <div class="mb-3">
              <div class="row">

                <div class="col-7">medicamento
                  <input type="text" class="form-control" id="efAltura" placeholder="Medicamento" value="">
                </div>
                <div class="col-2">tomar
                  <input type="text" class="form-control" id="efAltura" placeholder="0 Mg / Ml / Pz" value="">
                </div>
                <div class="col-1">horas
                  <input type="text" class="form-control" id="efAltura" placeholder="0 hrs" value="">
                </div>
                <div class="col-1">dias
                  <input type="text" class="form-control" id="efAltura" placeholder="0 dias" value="">
                </div>
                <div class="col-1 mx-auto p-3">
                  <button type="button" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" fill="currentColor" class="bi-plus-square-fill" viewBox="0 0 16 16">
                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"></path>
                    </svg>
                  </button>
                </div>

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">medicamento</th>
                      <th scope="col">toma</th>
                      <th scope="col">horas</th>
                      <th scope="col">dias</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Naproxeno 275.0 MG Paracetamol 300.0 MG</th>
                      <td>1</td>
                      <td>8 Hrs</td>
                      <td>5 Dias</td>
                      <td class="pt-0">
                        <button type="button" class="btn">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor" class="bi-dash-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1z"/>
                          </svg>
                        </button>
                    </td>
                    </tr>
                  </tbody>
                </table>

              </div>			
            </div>
          </div>
        </div>

        <hr class="my-4">

        <div class="row g-3">
          <div class="col-12 text-center">
            <button type="button" class="btn btn-primary" id="btnGuardar">
              <svg class="bi bi-floppy2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v3.5A1.5 1.5 0 0 1 11.5 6h-7A1.5 1.5 0 0 1 3 4.5V1H1.5a.5.5 0 0 0-.5.5m9.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path></svg> 
              Guardar
            </button>
            <button type="button" class="btn btn-success" id="btnGuardarImprimir">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16"><path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/><path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/></svg>
              Guardar e Imprimir
            </button>
            <button type="button" class="btn btn-danger" id="btnLimpiar">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/></svg>
              Limpiar
            </button>
          </div>
        </div>

      </div>

    </div>
  </main>
</div>


<?php 
//print_r($v_server); 
?>