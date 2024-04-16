<?php
include '../../componentes/header.php';
include '../../componentes/menu_site.php';
?>
  <h2>Resumo</h2>
    <form action="" method="post">
        <table class="table table-sm">
            <tbody>
              <tr>
                <td class="fw-bold">Data:</td>
                <td>15/11/2023</td>
                <input type="hidden" name="hour_id" value="15/11/2023"/>
                <input type="hidden" name="datetime" value="1000-01-01 00:00:00"/>
              </tr>

              <tr>
                <td class="fw-bold">Horário:</td>
                <td>8:00</td>
              </tr>

              <tr>
                <td class="fw-bold">Profissional:</td>
                <td>Douglas Castro</td>
                <input type="hidden" name="professional_id" value="{{ $order['professional'][0]->id }}"/>
              </tr>

              <tr>
                <td class="fw-bold">Serviço:</td>
                <td>Corte de Cabelo</td>
                <input type="hidden" name="service_id" value="{{ $order['service'][0]->id }}"/>
              </tr>

              <tr>
                <td class="fw-bold">Valor:</td>
                <td>R$&nbsp;30,00</td>
              </tr>
              
              <tr>
                <td class="fw-bold">Cliente:</td>
                <td>Matheus</td>
                <input type="hidden" name="name_client" value="{{ $order_session['name_client'] }}"/>
              </tr>

              <tr>
                <td class="fw-bold">Tel. Cliente:</td>
                <td>(61) 9 9887-7655</td>
                <input type="hidden" name="telephone_cliente" value="{{ $order_session['telephone_client'] }}"/>
              </tr>
            </tbody>
          </table>

        <div class="mt-3">
            <a class="btn btn-danger" href="../client/index.php">Voltar</a>
            <a class="btn btn-dark" href="../service/index.php">Confirmar</a>
        </div>
    </form>
<?php
include '../../componentes/footer.php';
?>