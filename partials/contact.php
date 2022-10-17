<div id="contact" class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="row section-flotante">
                <!-- <div class="col-2"></div> -->
                <div class="col-2">
                    <!-- icones reeaux sociaux -->
                </div>
                <div class="col-8">
                    <h3>Title of contact</h3>
                    <p><img src="/images/logo.png" alt="" class="imgFlottante">description laddo avec logo des mains qui font la valeur de LADDO
                    description laddo avec logo des mains qui font la valeur de LADDO
                    description laddo avec logo des mains qui font la valeur de LADDO
                    description laddo avec logo des mains qui font la valeur de LADDO
                    description laddo avec logo des mains qui font la valeur de LADDO
                    description laddo avec logo des mains qui font la valeur de LADDO
                </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col-12 col-md-9">
                 <form action="/controller/postContact.php" method="POST">
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="nom">
                            </div>
                            <div class="col-6">
                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" name="prenom">
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="-form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="message" class="form-label">Message</label>
                        <textarea type="text" class="form-control" rows="3" name="msg"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
              </form>   
                </div>
                <!-- <div class="colcol-12 col-md-2"></div> -->
            </div>
           
        </div>
    </div>
</div>

<style>
    @media all and (max-width: 400px){
        *{
            margin: 0px;
        }

        #contact{
            width: 400px;
            margin-left: 6px;
        }


        .imgFlottante {
            width: 10rem;
            border-radius: 50%;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            float: left;
            shape-outside: circle();
            margin: 10px;
        }

        .section-flotante{
            width: 560px;
            position: relative;
            right: 80px;
           text-align: justify;
        }
    }
</style>