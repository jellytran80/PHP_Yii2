/** Add new property in model */
class ClassName extends \yii\db\ActiveRecord
{

   public $addition;   //what attribute you want

    /* your code */

   public function fields()
   {
        $fields = parent::fields();
        $fields[] = 'addition';      //the value must be the same as the new attribute

        /* your code */

        $this->addition = 'done'
        return $fields
   }
}
