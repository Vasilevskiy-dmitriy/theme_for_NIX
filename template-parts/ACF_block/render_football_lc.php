<?php $matches = ( new Football_data_API( get_field('api_key_football_data', 'option') ) )->result(); ?>
<div id="accordion">

    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Group A
                </button>
            </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'GROUP_STAGE' AND $match->group == 'GROUP_A'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Group B
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'GROUP_STAGE' AND $match->group == 'GROUP_B'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Group C
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'GROUP_STAGE' AND $match->group == 'GROUP_C'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Group D
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'GROUP_STAGE' AND $match->group == 'GROUP_D'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Group E
                </button>
            </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'GROUP_STAGE' AND $match->group == 'GROUP_E'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingSix">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Group F
                </button>
            </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'GROUP_STAGE' AND $match->group == 'GROUP_F'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingSeven">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Group G
                </button>
            </h5>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'GROUP_STAGE' AND $match->group == 'GROUP_G'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingEight">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Group H
                </button>
            </h5>
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'GROUP_STAGE' AND $match->group == 'GROUP_H'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingNine">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    Last 16
                </button>
            </h5>
        </div>
        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Score</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Status</th>
                        <th scope="col">Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($matches->matches as $match): ?>
                    <?php if( $match->stage == 'LAST_16'): ?>
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td><?php echo $match->homeTeam->name; ?></td>
                            <td><?php echo $match->awayTeam->name; ?></td>
                            <td><?php echo $match->score->fullTime->homeTeam; ?> - <?php echo $match->score->fullTime->awayTeam; ?></td>
                            <td><?php  echo $match->score->winner; ?></td>
                            <td><?php echo $match->status; ?></td>
                            <td><?php echo $match->utcDate; ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

