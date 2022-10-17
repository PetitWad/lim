<div class="sectionOne">
           <div class="image"><img style="height:450px" src="../images/edu.JPG" alt=""></div>
        <div class="text">
            <h3>Quelle est l'importance de l'école?</h3> 
            Le rôle de l'école est de fournir une culture commune à tous les individus,
            quel que soit leur milieu d'appartenance, afin que cette éducation puisse leur 
            servir tout au long de la vie. Depuis les années 1950, l'accès à l'école et à
            l'enseignement supérieur a fortement augmenté. Nous présentons ici une synthèse
            liée aux différentes étapes qui ont construit notre cheminement réflexif 
            autour du bien-être à l’école, notamment suite à la journée d’étude consacrée
            aux regards scientifiques croisés sur le sujet susvisé (Bordeaux, 14 mai 2014).</div>
       </div>
    </body>
    </html>


<style>
    .sectionOne{
        height: 300px;
        display: flex;
        direction: column;
        justify-content: space-around;
        margin-top: 80px;
        margin-bottom: 200px;
    }

    .text{
        width: 600px;
        position: relative;
        top: 120px;
        right: 60px;
    }


    @media screen and (max-width: 769px) {
        .sectionOne{
            height: 300px;
            display: flex;
            direction: column;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 500px;
        }

        .text{
            width: 400px;
            text-align: center;
            position: relative;
            top: 0px;
            right: 0;
            box-shadow: 5px 10px 10px 5px #888888;
            padding: 8px;
            background-color: gray;
            color: white;
        }

        .text h3{
         font-weight: bolder;
        }
        
    }

    @media all and (max-width: 400px){
        *{
            margin: 0px;
        }

        .sectionOne{
            width: 400px;
            margin-left: 6px;
        }
    }
</style>