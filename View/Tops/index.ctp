<div class="row">
    <div class="card card-block normalCard">
        <?php echo $this->Form->create(false,
            array(
                'type' => 'get',
                'url' => array('controller' => 'searches', 'action' => 'showList'),
                'class' => 'form-inline textAlign'
            )
        ); ?>
        <?php echo $this->Form->input("title", array(
            'class' => 'form-control mb-2 mr-sm-2 mb-sm-0',
            'id'    => 'inlineFormInput',
            'placeholder' => 'Reign Over Me',
            'type' => 'search',
            'div'  => array('class' => 'mb-2'),
            'label' => array(
                'text' =>'Search Movie',
                'class' => 'mr-sm-2'
            )
        )); ?>
        <?php echo $this->Form->end(array(
            "label" => 'Search',
            'div'   => false,
            'class' => 'btn btn-outline-primary'
        )); ?>
    </div>
</div>
