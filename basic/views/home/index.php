<div class="section">
      <div class="row">
        <div
          class="
            carousel carousel-slider
            center
            col
            l6
            offset-l3
            m8
            offset-m2
            s12
          "
        >
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="<?=\yii\helpers\Url::to(['/locations'.$i])?>">See Locations</a>
          </div>
          <?for($i = 0; $i < 10; $i++):?>
          <div class="carousel-item transparent white-text">
            <img src="<?=\yii\helpers\Url::to(['/images/home-gallery/'.$i])?>.jpg" alt="" />
          </div>
          <?endfor;?>
        </div>
      </div>
    <div class="divider"></div>
    <div class="row">
        <div class = "col l6 m8 s12 offset-l3 offset-m2">
            <h3 class = "center">Our Hours</h3>
            <table class="highlight centered">
                <thead>
                <tr>
                    <th>Day</th>
                    <th>Opens</th>
                    <th>Closes</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Sunday</td>
                    <td>11 am</td>
                    <td>6 pm</td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>8 am</td>
                    <td>8 pm</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>8 am</td>
                    <td>8 pm</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>8 am</td>
                    <td>8 pm</td>
                </tr>          
                <tr>
                    <td>Thursday</td>
                    <td>8 am</td>
                    <td>8 pm</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>8 am</td>
                    <td>8 pm</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>10 am</td>
                    <td>6 pm</td>
                </tr>
                </tbody>
            </table>
      </div>
    </div>
    <h3 class = "center">Happy Hours</h3>
    <div class="divider"></div>
    <div class="row">
    <div class = "col l6 m8 s12 offset-l3 offset-m2">
        <table class="highlight centered">
            <thead>
            <tr>
                <th>Every Day</th>
                <th>From 12 pm</th>
                <th>To 2 pm</th>
            </tr>
            </thead>
        </table>
  </div>
  </div>
</div>