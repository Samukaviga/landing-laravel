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
                    <x-form action="/">

                        <h2 class="mb-4 mt-0 text-center fw-bold">Inscreva<span class="carc">-</span>se<span class="carc">!</span></h2>

                        <div class="form-group">
                            <label style="color:#333; font-weight:400;">Nome</label>
                            <input type="text" class="form-control pb_height-50 reverse" name="name" id="nome" placeholder="Nome completo*" value="" required>
                        </div>

                        <div class="form-group">
                            <label style="color:#333; font-weight:400;">Celular</label>
                            <input inputmode="numetic" type="text" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{4,6}$" class="form-control pb_height-50 reverse mobile " name="mobile_phone"
                                placeholder="WhatsApp / Celular*" id="mobile_phone" required>
                        </div>

                        <div class="form-group">
                            <label style="color:#333; font-weight:400;">Data de Nascimento</label>
                            <input type="text" class="form-control pb_height-50 reverse " name="date_of_birth"
                                placeholder="Data de Nascimento*" id="date_of_birth" required>
                        </div>

                        <div class="form-group">
                            <div class="pb_select-wrap">
                                <label for="course_1">Curso 1</label>
                                <select class="form-control pb_height-50 reverse" name="course_1" required id="course_1">
                                    <option value="" hidden selected>Curso (Opção 1)*</option>
                                    <option value="">Informatica</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="pb_select-wrap">
                                <label for="course_2">Curso 2</label>
                                <select class="form-control pb_height-50 reverse" name="course_2" required id="course_2">
                                    <option value="" hidden selected>Curso (Opção 2)*</option>
                                    <option value="">Cabeleireiro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="pb_select-wrap">
                                <label for="course_3">Curso 3</label>
                                <select class="form-control pb_height-50 reverse" name="course_3" required id="course_3">
                                    <option value="" hidden selected>Curso (Opção 3)*</option>
                                    <option value="">Lash Designer</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="id_unidade">Cidade</label>
                            <div class="pb_select-wrap">
                                <select class="form-control pb_height-50 reverse " name="id_company" required="" id="id_company">
                                    <option value="" hidden selected>Selecione uma Cidade*</option>
                                    <option value="1">Itaquaquecetuba</option>
                                    <option value="6">Arujá</option>
                                    <option value="3">Suzano</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <input id="send" type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  "
                                value="Confirmar inscrição">
                        </div>

                    </x-form>

                </div>
            </div>
        </div>
    </section>

</x-layout>