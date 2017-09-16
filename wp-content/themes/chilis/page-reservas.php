<?php get_header(); ?>

<section class="reservas">

    <div class="container">

        <div class="title-section">
            <h1>Reservas</h1>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h3>Gracias por preferirnos. ¡Aquí vives más cada momento!</h3>

                <p>También puedes reservar llamando a nuestro Call Center.
                    Horario de atención es de 9.00 am a 6.00 pm de Lunes a Sábado.<br>
                    Lima: 610 0010<br>
                    Provincias: 60 0010
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nombres">Nombres y Apellidos</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Jhon Doe">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" maxlength="10" name="telefono" id="telefono" class="form-control" placeholder="+51 999 99 99 99">
                    </div>


                    <div class="form-group">
                        <label for="local">Local para tu reserva</label>
                        <select name="local" id="local" class="form-control">
                            <option value="">Elige un local</option>
                            <optgroup label="Arequipa">
                                <option value="local1">Parque Lambramani</option>
                                <option value="local2">Mall Aventura</option>
                            </optgroup>
                            <optgroup label="Lima">
                                <option value="local3">Real Plaza</option>
                            </optgroup>
                        </select>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefono">Hora</label>
                                <div class="form-inline">
                                    <input type="text" style="width:80px;" name="hora" id="hora" class="form-control"> :
                                    <input type="text" style="width:80px;" name="minutos" id="minutos" class="form-control ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num_personas">N° Personas</label>
                                <input type="text" maxlength="10" name="num_personas" id="num_personas" class="form-control" placeholder="1-15">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono">N° Personas</label>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Me gustaria recibir promociones de Chili’s
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            He leído y acepto las <a href="http://chilis.com.pe/img/Politica_Privacidad_Reservas.pdf">Políticas de Privacidad</a>
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit">Enviar</button>
                        <button type="reset">Borrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

