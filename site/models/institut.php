<?php


class InstitutPage extends Page
{
    public function cover()
{
    return $this->content()->get('cover')->toFile() ?? $this->image();

}
}

?>