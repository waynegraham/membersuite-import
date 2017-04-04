<h1>MemberSuite Imports</h1>
<p><?= $this->Html->link("Add Import", ['action' => 'add']) ?></p>
<table>
  <tr>
    <th>
      Id
    </th>
    <th>
      Title
    </th>
    <th>
      Created
    </th>
  </tr>
  <?php foreach ($imports as $import): ?>
      <tr>
          <td><?= $import->id ?></td>
          <td>
              <?= $this->Html->link($import->title, ['action' => 'view', $import->id]) ?>
          </td>
          <td>
              <?= $import->created->format(DATE_RFC850) ?>
          </td>
          <td>
              <?= $this->Form->postLink(
                  'Delete',
                  ['action' => 'delete', $import->id],
                  ['confirm' => 'Are you sure?'])
              ?>
              <?= $this->Html->link('Edit', ['action' => 'edit', $import->id]) ?>
          </td>
      </tr>
      <?php endforeach; ?>
</table>
