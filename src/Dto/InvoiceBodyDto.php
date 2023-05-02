<?php

namespace SnappMarketPro\Moadian\Dto;

class InvoiceBodyDto extends PrimitiveDto
{
    /**
     * service stuff ID
     */
    private $sstid;

    /**
     * service stuff title
     */
    private $sstt;

    /**
     * amount
     */
    private $am;

    /**
     * measurement unit
     */
    private $mu;

    /**
     * fee (pure price per item)
     */
    private $fee;

    /**
     * fee in foreign currency
     */
    private $cfee;

    /**
     * currency type
     */
    private $cut;

    /**
     * exchange rate
     */
    private $exr;

    /**
     * pre discount
     */
    private $prdis;

    /**
     * discount
     */
    private $dis;

    /**
     * after discount
     */
    private $adis;

    /**
     * VAT rate
     */
    private $vra;

    /**
     * VAT amount
     */
    private $vam;

    /**
     * over duty title
     */
    private $odt;

    /**
     * over duty rate
     */
    private $odr;

    /**
     * over duty amount
     */
    private $odam;

    /**
     * other legal title
     */
    private $olt;

    /**
     * other legal rate
     */
    private $olr;

    /**
     * other legal amount
     */
    private $olam;

    /**
     * construction fee
     */
    private $consfee;

    /**
     * seller profit
     */
    private $spro;

    /**
     * broker salary
     */
    private $bros;

    /**
     * total construction profit broker salary
     */
    private $tcpbs;

    /**
     * cash share of payment
     */
    private $cop;

    /**
     * vat of payment
     */
    private $vop;

    /**
     * buyer register number
     */
    private $bsrn;

    /**
     * total service stuff amount
     */
    private $tsstam;

    public function getSstid()
    {
        return $this->sstid;
    }

    public function setSstid($sstid): self
    {
        $this->sstid = $sstid;
        return $this;
    }

    public function getSstt()
    {
        return $this->sstt;
    }

    public function setSstt($sstt): self
    {
        $this->sstt = $sstt;
        return $this;
    }

    public function getAm()
    {
        return $this->am;
    }

    public function setAm($am): self
    {
        $this->am = $am;
        return $this;
    }

    public function getMu()
    {
        return $this->mu;
    }

    public function setMu($mu): self
    {
        $this->mu = $mu;
        return $this;
    }

    public function getFee()
    {
        return $this->fee;
    }

    public function setFee($fee): self
    {
        $this->fee = $fee;
        return $this;
    }

    public function getCfee()
    {
        return $this->cfee;
    }

    public function setCfee($cfee): self
    {
        $this->cfee = $cfee;
        return $this;
    }

    public function getCut()
    {
        return $this->cut;
    }

    public function setCut($cut): self
    {
        $this->cut = $cut;
        return $this;
    }

    public function getExr()
    {
        return $this->exr;
    }

    public function setExr($exr): self
    {
        $this->exr = $exr;
        return $this;
    }

    public function getPrdis()
    {
        return $this->prdis;
    }

    public function setPrdis($prdis): self
    {
        $this->prdis = $prdis;
        return $this;
    }

    public function getDis()
    {
        return $this->dis;
    }

    public function setDis($dis): self
    {
        $this->dis = $dis;
        return $this;
    }

    public function getAdis()
    {
        return $this->adis;
    }

    public function setAdis($adis): self
    {
        $this->adis = $adis;
        return $this;
    }

    public function getVra()
    {
        return $this->vra;
    }

    public function setVra($vra): self
    {
        $this->vra = $vra;
        return $this;
    }

    public function getVam()
    {
        return $this->vam;
    }

    public function setVam($vam): self
    {
        $this->vam = $vam;
        return $this;
    }

    public function getOdt()
    {
        return $this->odt;
    }

    public function setOdt($odt): self
    {
        $this->odt = $odt;
        return $this;
    }

    public function getOdr()
    {
        return $this->odr;
    }

    public function setOdr($odr): self
    {
        $this->odr = $odr;
        return $this;
    }

    public function getOdam()
    {
        return $this->odam;
    }

    public function setOdam($odam): self
    {
        $this->odam = $odam;
        return $this;
    }

    public function getOlt()
    {
        return $this->olt;
    }

    public function setOlt($olt): self
    {
        $this->olt = $olt;
        return $this;
    }

    public function getOlr()
    {
        return $this->olr;
    }

    public function setOlr($olr): self
    {
        $this->olr = $olr;
        return $this;
    }

    public function getOlam()
    {
        return $this->olam;
    }

    public function setOlam($olam): self
    {
        $this->olam = $olam;
        return $this;
    }

    public function getConsfee()
    {
        return $this->consfee;
    }

    public function setConsfee($consfee): self
    {
        $this->consfee = $consfee;
        return $this;
    }

    public function getSpro()
    {
        return $this->spro;
    }

    public function setSpro($spro): self
    {
        $this->spro = $spro;
        return $this;
    }

    public function getBros()
    {
        return $this->bros;
    }

    public function setBros($bros): self
    {
        $this->bros = $bros;
        return $this;
    }

    public function getTcpbs()
    {
        return $this->tcpbs;
    }

    public function setTcpbs($tcpbs): self
    {
        $this->tcpbs = $tcpbs;
        return $this;
    }

    public function getCop()
    {
        return $this->cop;
    }

    public function setCop($cop): self
    {
        $this->cop = $cop;
        return $this;
    }

    public function getVop()
    {
        return $this->vop;
    }

    public function setVop($vop): self
    {
        $this->vop = $vop;
        return $this;
    }

    public function getBsrn()
    {
        return $this->bsrn;
    }

    public function setBsrn($bsrn): self
    {
        $this->bsrn = $bsrn;
        return $this;
    }

    public function getTsstam()
    {
        return $this->tsstam;
    }

    public function setTsstam($tsstam): self
    {
        $this->tsstam = $tsstam;
        return $this;
    }
}
