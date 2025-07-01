<x-layout>

    <section class="bg-home4" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <picture class="div-img-bolsas">
                        <source srcset="assets/images/logo-azul-bolsas-novo.webp" type="image/webp">
                        <img
                            src="assets/images/logo-azul-bolsas-novo.png"
                            alt="Logo bolsas azul"
                            class="img-fluid logo-bolsa"
                            width="600" height="400"
                            fetchpriority="high">
                    </picture>
                </div>
                <div class="col-md-1"></div>

                <div class="col-md-5 relative align-self-center mt-5">
                    <form action="./" method="POST" class="bg-white  pb_form_v1" style="border-radius: 30px">
                        <input type="hidden" name="token" value="Ja1FdWeravHfxUq2GFkUhho5QfoKonaqrEagKLL7">
                        <h2 class="mb-4 mt-0 text-center fw-bold">Inscreva<span class="carc">-</span>se<span class="carc">!</span></h2>
                        <div class="form-group">
                            <label style="color:#333; font-weight:400;">Nome</label>
                            <input type="text"
                                class="form-control pb_height-50 reverse"
                                name="name"
                                placeholder="Nome completo*" value="" required="" id="nome">
                        </div>
                        <div class="form-group">
                            <label style="color:#333; font-weight:400;">Celular</label>
                            <input inputmode="numetic" type="text" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{4,6}$" class="form-control pb_height-50 reverse mobile "
                                name="mobile"
                                placeholder="WhatsApp / Celular*" value="" required="" id="whatsapp">
                        </div>

                        <div class="form-group">
                            <label style="color:#333; font-weight:400;">Data de Nascimento</label>
                            <input type="text" class="form-control pb_height-50 reverse " name="nascimento"
                                placeholder="Data de Nascimento*" id="nascimento" required=""
                                value="">
                        </div>

                        <div class="form-group">
                            <div class="pb_select-wrap">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pb_select-wrap">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pb_select-wrap">

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="id_unidade">Cidade</label>
                            <div class="pb_select-wrap">
                                <select class="form-control pb_height-50 reverse " name="id_unidade" required="" id="id_unidade">
                                    <option value="" hidden selected>Selecione uma Cidade*</option>
                                    <option value="1">Itaquaquecetuba</option>
                                    <option value="6">Arujá</option>
                                    <option value="3">Suzano</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input id="enviar" type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  "
                                value="Confirmar inscrição">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

</x-layout>