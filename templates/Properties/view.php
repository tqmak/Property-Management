<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property $property
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete: {0}?', $property->property_title), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Go back'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="properties view content">
            <h3><?= h($property->property_title) ?></h3>
            <table>
                <!-- <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $property->has('user') ? $this->Html->link($property->user->id, ['controller' => 'Users', 'action' => 'view', $property->user->id]) : '' ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Property Title') ?></th>
                    <td><?= h($property->property_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Property Description') ?></th>
                    <td><?= h($property->property_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Property Category') ?></th>
                    <td><?= h($property->property_category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Property Image') ?></th>
                    <td><?= $this->Html->image(h($property->property_image), array('width' => '320px')) ?></td>
                </tr>
                <tr>
                    <th><?= __('Property Tags') ?></th>
                    <td><?= h($property->property_tags) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td>
                        <?php if ($property->status == 1) {
                            echo 'Activate';
                        } else if ($property->status == 0) {
                            echo 'Inactivate';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?= __('Created Date') ?></th>
                    <td><?= h($property->created_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified Date') ?></th>
                    <td><?= h($property->modified_date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Property Comments') ?></h4>
                <?php if (!empty($property->property_comments)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Comments') ?></th>
                                <th><?= __('Posted Date') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php
                            $i = 1;
                            foreach ($property->property_comments as $propertyComments) :

                                // dd($property->user);
                                // die; 
                            ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= h($propertyComments->comments) ?></td>
                                    <td><?= h($propertyComments->created_date) ?></td>
                                    <td class="actions">
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'PropertyComments', 'action' => 'delete', $propertyComments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyComments->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>