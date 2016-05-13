Color Picker Widget
Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= $form->field($model, 'back_color')->widget(KinwingWidgets\colorpicker\ColorPickerWidget::className(), ['id' => 'color-picker', 'name' => 'color-picker']); ?>
<?= KinwingWidgets\colorpicker\ColorPickerWidget::widget(['id' => 'color-picker', 'name' => 'color-picker']); ?>

```
