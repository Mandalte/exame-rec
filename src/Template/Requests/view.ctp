<div class="requests view large-9 medium-8 columns content">
    <h3><?= h($request->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $request->has('user') ? $this->Html->link($request->user->id, ['controller' => 'Users', 'action' => 'view', $request->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type Request') ?></th>
            <td><?= h($request->type_request) ?></td>
        </tr>
        <tr>
            <th><?= __('Text') ?></th>
            <td><?= h($request->text) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($request->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($request->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($request->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($request->modified) ?></td>
        </tr>
    </table>
</div>
