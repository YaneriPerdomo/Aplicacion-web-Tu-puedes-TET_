<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu puedes | Leccion 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../css/reset.css">
    <link rel="stylesheet" href="../../../css/efectos_siempre/scrollbar.css">
    <link rel="icon" type="image/x-icon" href="../../../../../img/icono/icono.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://pie-meister.github.io/PieMeister-with-Progress.min.js"></script>

    <style>


        :root{
            --color-gris: rgb(239, 239, 239);
            --color-negro: rgb(47,47,47);
            --color-azul:#1CB0F6;
            --color-orange: #ff7d3f;
        } 


        main{
            height: auto;
            /*background-color: #ffeee6 ;
            background-image: url(../../../img/fondo_jugador.png);*/
            display: flex;
            justify-content: center;
            align-items: center;
        }

     

     
        .display{
            display: none;
            opacity: 0;
        }

        .btn_orange {
            background: #fca345;
            font-weight: 600;
            color: white;
            border-radius: 0.5rem;
            padding: 0.7rem 1.3rem;
            text-decoration: none;
            transition: all 0.5s linear;
            box-shadow: -0rem 0.2rem #7e4f1e;
            display: block;
            
        }

       
        span a{
            text-decoration: none;
            font-weight: bold;
            z-index: 999;
            color: rgb(47,47,47);
        }
        
      
        .fondo-letras{
            background-image: url(../../../img/letras-efecto-blanco-negro.png);
            position: absolute;
            height: 100vh;
            width: 100vw;
            opacity: 0.7;
        }
 
        .btn_salir:hover{
            transition: all linear 0.5s;
            color: #d55252;
        }

        .btn_orange:hover{
            transition: all linear 0.4s;
            background: #ffa94f;
            transform: translateY(-4px);
            transition: all 250ms cubic-bezier(.3, .7, .4, 1.5); 
            box-shadow: -0rem 0.3rem #7e4f1e;
            filter: brightness(110%);
        }

        .btn_gris--saltar:hover{
            transition: all linear 0.4s;
            transform: translateY(-4px);
            transition: all 250ms cubic-bezier(.3, .7, .4, 1.5); 
            filter: brightness(110%);
        }
        #pot a {
            color: blue;
        }

        #boton_sonido:hover{
            transition: color linear 0.5s;
            color: #ffe9c1;
            cursor: pointer;
        }

        .logo figure img{
            max-width: 100px;
        }

        header{
            height:  78.8px  ;
            background: #ff7d3f;
            width: 100%;
           
        }

        

        .progreso_tabla{
            background: white;
            border-radius: 0.5rem;
            padding:  1.5rem;
            box-shadow: 0px 1px 2px rgb(215 215 215);
            border: 1px solid rgb(239, 239, 239);
        }

        .mensaje_actualizacion{
            padding: 0.5rem;
            background: rgb(0 0 0 / 6%);
            border-radius: 0.5rem;
            margin: 0.8rem;
            position: relative;
        }

        .mensaje_actualizacion--button{
            position: absolute;
            top: -1rem;
            background-color: rgb(47, 47, 47);
            border-radius: 100%;
            padding: 0.5rem 0.7rem;
            color: white;
            right: -1rem;
            border: none;
        }

        .read{
            background: white;
            border-radius: 0.5rem;
            padding: 1rem;
            border: 1px solid rgb(239, 239, 239);
            box-shadow: 0px 1px 2px rgb(215 215 215);
        }

        .styles_cuaderno{
            width: 8rem;
            height: 6rem;
            background-image: linear-gradient(45deg, #ff864c 30%,
                            #ff7736   30% 50%, #ff864c 50% 60%, 
                            #ff7736  60% 65%, #ff864c 55% 100%);
            border-radius: 0.5rem;
            position: relative;
            filter: drop-shadow(2px 4px 0px #c36437);
        }

        .styles_cuaderno > .black:first-child{
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgb(47, 47, 47);
            width: 20px;
            height: 15px;
            top: 0.5rem;
            left: -0.5rem;
            border-radius: 0.5rem;
        }
         
        .styles_cuaderno_azul{
            width: 8rem;
            height: 6rem;
            background-image: linear-gradient(45deg, #1CB0F6 30%, #16a0e1 30% 50%, #1CB0F6 50% 60%, #16a0e1 60% 65%, #1CB0F6 56% 100%);
            border-radius: 0.5rem;
            position: relative;
            filter: drop-shadow(2px 4px 0px #1795d1);
    
        }
        .styles_cuaderno > .black_dos{
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgb(47, 47, 47);
            width: 20px;
            height: 15px;
            top: 4.5rem;
            left: -0.5rem;
            border-radius: 0.5rem;
        }

        .container__styles_leccion{
            display: flex;
            justify-content: center;
            gap: 3rem;
            display: flex;
            margin: 1.5rem 0rem;
        }

        .bi-pencil{
            border: solid 0.1rem white;
            padding: 0.2rem;
            border-radius: 0.2rem;
        }

        .title_leccion{
            text-align: center;
        }
        .carita{
            text-align: center;
            color: white;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

         .title_progreso{
            color: rgb(47, 47, 47);
            font-weight: bold;
         }

         .form__btn--detalle {
            background: white;
            border: 0rem;
            color: white;
            padding: 0.5rem 0.6rem;
            border-radius: 0.5rem;
            color: #fc7c45;
            font-weight: bold;
            text-align: center;
            display: inline;
        }
    

        .progreso_usuario-flex{
            display: flex;
            justify-content: space-between;
            width: 100%;
            /* border: solid; */
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        /*boton */
        

        .boton_revisar{
            background: #ff864c ;
            color: white;
            padding: 0.5rem 5rem;
            border-radius: 1rem;
            text-decoration: none;
            border-bottom: #d9713f solid 3px;
        }

        .rayita{
            height: 2px;
            background: rgb(239, 239, 239);
            margin: 1.5rem 0rem ;

        }

        .estado_juego + span {
            color:rgb(47, 47, 47); background: rgb(47, 47, 47,0.1); border-radius:0.4rem; padding: 0.2rem;

        }
        .star{
            background: var(--color-azul);
            border-radius: 50%;
            padding: 0.5rem;
            color: white;
        } 

        @media screen and (max-width: 1128px) {
            .col-1{
                display: none !important; 
            }

            
        }

        @media screen and (max-width: 768px) {
            .col-xl-3 {
                display : none;
            }
        }

        footer{
    background-color: rgb(47, 47, 47);
}
.py-5 {
    padding-top:1rem !important;
    padding-bottom: 1rem !important;
}

footer .d-flex {
    margin: 0 auto;
    width: 50%;
    justify-content: space-between;
}

footer .d-flex {
    margin: 0 auto;
    width: 50%;
    justify-content: space-between;
}
.flex-wrap {
    flex-wrap: wrap !important;
}
.flex-row {
    flex-direction: row !important;
}
.d-flex {
    display: flex !important;
}

.container-guia{
    padding: 0.5rem;
    border: solid 2px rgb(60, 60, 60);
    border-radius: 1rem;
    color: rgb(60, 60, 60);
    font-weight: bold;
    display: flex;
    gap: 0.5rem;
}

.selection_week_month_orange{
    background: #ff864c;
}

.d-flex_rapido{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}
    </style>
</head>
<body style="background-image: url(../../../../../img/player/fondo.png);">
  
    <main>
         <div class="container-fluid w-100 h-100 mt-5">
         <div class="container-xl h-100 w-100">
            <div class="d-flex" style="display:flex;display: flex;flex-direction: column;height: 70vh;padding: 1rem;background: white;border-radius: 1rem;box-shadow: 0px 4px 0px var(--color-negro) ;border: solid 2px var(--color-gris);">
              <div class="bg-white w-100 title" >
                <div class="d-flex" style="justify-content: center;align-items: center;  justify-content: center;align-items: center;justify-content:center;align-items: center;color: white;border-radius: 0.5rem;margin-bottom: 0.5rem;gap:1rem">
                  <div>  
                    <a href="../../read.php"> <i class="bi bi-x-lg fs-2 " style="color:grey"></i> </a>
                  </div>
                  <div style="flex-grow: 2;">
                    <div class="progress " role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 10%">10%</div>
                    </div>
                  </div>
                  <div>
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="bi bi-star-fill fs-1 text-warning me-2"></i>
                        <span class=" start text-warning fs-3">0</span>
                    </div>
                  </div>
                </div>  
              </div>
              <div class="container_aprende" style="flex-grow: 2;">
                  <div class="mensaje">
                    <p>Prueba</p>
                  </div>
              </div>
              <div class="rayita"></div>
              <div class="botones" style="     display: flex;justify-content: space-between;margin: 0rem 3rem;">
                  <button type="button" class="btn_gris--saltar btn btn-outline-secondary" style="    box-shadow: 0px 4px 0px #636363;">SALTAR</button>
                  <button class="btn_orange btn" >COMPROBAR</button>
              </div>
            </div>
        </div>
         </div>
         
    </main>
    <br><br><br><br><br><br><br>
    
    <div class="marco">
      <div class="tiempo" style="display: none;" id="tiempo">00:00:00.000</div>
      <div class="botones-contenedor">
        <div class="btn" onclick="iniciar()">
          <i class="fas fa-play"></i>
        </div>
      </div>
    </div>

    <script>

      let tiempoRef = Date.now()
      let cronometrar = true
      let acumulado = 0

      function iniciar() {
          cronometrar = true
      }

      function pausar() {
          cronometrar = false
      }

      function reiniciar() {
          acumulado = 0
      }

      setInterval(() => {
          let tiempo = document.getElementById("tiempo")
          if (cronometrar) {
              acumulado += Date.now() - tiempoRef
          }
          tiempoRef = Date.now()
          tiempo.innerHTML = formatearMS(acumulado)
      }, 1000 / 60);

      function formatearMS(tiempo_ms) {
          let MS = tiempo_ms % 1000
          
          //Agregué la variable St para solucionar el problema de contar los minutos y horas.
          
          let St = Math.floor(((tiempo_ms - MS) / 1000))
          
          let S = St%60
          let M = Math.floor((St / 60) % 60)
          let H = Math.floor((St/60 / 60))
          Number.prototype.ceros = function (n) {
              return (this + "").padStart(n, 0)
          }

          return H.ceros(2) + ":" + M.ceros(2) + ":" + S.ceros(2)
              + "." + MS.ceros(3)
      }
    
    </script>

    <script src="../../../js/read.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>