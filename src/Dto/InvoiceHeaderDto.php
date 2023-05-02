<?php

namespace SnappMarketPro\Moadian\Dto;

class InvoiceHeaderDto extends PrimitiveDto
{
    /**
     * unique tax ID (should be generated using InvoiceIdService)
     */
    private $taxid;

    /**
     * invoice timestamp (milliseconds from epoch)
     */
    private $indatim;

    /**
     * invoice creation timestamp (milliseconds from epoch)
     */
    private $indati2m;

    /**
     * invoice type
     */
    private $inty;

    /**
     * stringernal invoice number
     */
    private $inno = null;

    /**
     * invoice reference tax ID
     */
    private $irtaxid;

    /**
     * invoice pattern
     */
    private $inp;

    /**
     * invoice subject
     */
    private $ins;

    /**
     * seller tax identification number
     */
    private $tins;

    /**
     * type of buyer
     */
    private $tob;

    /**
     * buyer ID
     */
    private $bid;

    /**
     * buyer tax identification number
     */
    private $tinb;

    /**
     * seller branch code
     */
    private $sbc;

    /**
     * buyer postal code
     */
    private $bpc;

    /**
     * buyer branch code
     */
    private $bbc;

    /**
     * flight type
     */
    private $ft;

    /**
     * buyer passport number
     */
    private $bpn;

    /**
     * seller customs licence number
     */
    private $scln;

    /**
     * seller customs code
     */
    private $scc;

    /**
     * contract registration number
     */
    private $crn;

    /**
     * billing ID
     */
    private $billid;

    /**
     * total pre discount
     */
    private  $tprdis;

    /**
     * total discount
     */
    private  $tdis;

    /**
     * total after discount
     */
    private  $tadis;

    /**
     * total VAT amount
     */
    private  $tvam;

    /**
     * total other duty amount
     */
    private  $todam;

    /**
     * total bill
     */
    private  $tbill;

    /**
     * settlement type
     */
    private $setm;

    /**
     * cash payment
     */
    private $cap;

    /**
     * installment payment
     */
    private $insp;

    /**
     * total VAT of payment
     */
    private $tvop;

    /**
     * tax17
     */
    private  $tax17;

    public function getTaxid()
    {
        return $this->taxid;
    }

    public function setTaxid($taxid): self
    {
        $this->taxid = $taxid;
        return $this;
    }

    public function getIndatim()
    {
        return $this->indatim;
    }

    public function setIndatim($indatim): self
    {
        $this->indatim = $indatim;
        return $this;
    }

    public function getIndati2m()
    {
        return $this->indati2m;
    }

    public function setIndati2m($indati2m): self
    {
        $this->indati2m = $indati2m;
        return $this;
    }

    public function getInty()
    {
        return $this->inty;
    }

    public function setInty($inty): self
    {
        $this->inty = $inty;
        return $this;
    }

    public function getInno()
    {
        return $this->inno;
    }

    public function setInno($inno): self
    {
        $this->inno = $inno;
        return $this;
    }

    public function getIrtaxid()
    {
        return $this->irtaxid;
    }

    public function setIrtaxid($irtaxid): self
    {
        $this->irtaxid = $irtaxid;
        return $this;
    }

    public function getInp()
    {
        return $this->inp;
    }

    public function setInp($inp): self
    {
        $this->inp = $inp;
        return $this;
    }

    public function getIns()
    {
        return $this->ins;
    }

    public function setIns($ins): self
    {
        $this->ins = $ins;
        return $this;
    }

    public function getTins()
    {
        return $this->tins;
    }

    public function setTins($tins): self
    {
        $this->tins = $tins;
        return $this;
    }

    public function getTob()
    {
        return $this->tob;
    }

    public function setTob($tob): self
    {
        $this->tob = $tob;
        return $this;
    }

    public function getBid()
    {
        return $this->bid;
    }

    public function setBid($bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    public function getTinb()
    {
        return $this->tinb;
    }

    public function setTinb($tinb): self
    {
        $this->tinb = $tinb;
        return $this;
    }

    public function getSbc()
    {
        return $this->sbc;
    }

    public function setSbc($sbc): self
    {
        $this->sbc = $sbc;
        return $this;
    }

    public function getBpc()
    {
        return $this->bpc;
    }

    public function setBpc($bpc): self
    {
        $this->bpc = $bpc;
        return $this;
    }

    public function getBbc()
    {
        return $this->bbc;
    }

    public function setBbc($bbc): self
    {
        $this->bbc = $bbc;
        return $this;
    }

    public function getFt()
    {
        return $this->ft;
    }

    public function setFt($ft): self
    {
        $this->ft = $ft;
        return $this;
    }

    public function getBpn()
    {
        return $this->bpn;
    }

    public function setBpn($bpn): self
    {
        $this->bpn = $bpn;
        return $this;
    }

    public function getScln()
    {
        return $this->scln;
    }

    public function setScln($scln): self
    {
        $this->scln = $scln;
        return $this;
    }

    public function getScc()
    {
        return $this->scc;
    }

    public function setScc($scc): self
    {
        $this->scc = $scc;
        return $this;
    }

    public function getCrn()
    {
        return $this->crn;
    }

    public function setCrn($crn): self
    {
        $this->crn = $crn;
        return $this;
    }

    public function getBillid()
    {
        return $this->billid;
    }

    public function setBillid($billid): self
    {
        $this->billid = $billid;
        return $this;
    }

    public function getTprdis()
    {
        return $this->tprdis;
    }

    public function setTprdis($tprdis): self
    {
        $this->tprdis = $tprdis;
        return $this;
    }

    public function getTdis()
    {
        return $this->tdis;
    }

    public function setTdis($tdis): self
    {
        $this->tdis = $tdis;
        return $this;
    }

    public function getTadis()
    {
        return $this->tadis;
    }

    public function setTadis($tadis): self
    {
        $this->tadis = $tadis;
        return $this;
    }

    public function getTvam()
    {
        return $this->tvam;
    }

    public function setTvam($tvam): self
    {
        $this->tvam = $tvam;
        return $this;
    }

    public function getTodam()
    {
        return $this->todam;
    }

    public function setTodam($todam): self
    {
        $this->todam = $todam;
        return $this;
    }

    public function getTbill()
    {
        return $this->tbill;
    }

    public function setTbill($tbill): self
    {
        $this->tbill = $tbill;
        return $this;
    }

    public function getSetm()
    {
        return $this->setm;
    }

    public function setSetm($setm): self
    {
        $this->setm = $setm;
        return $this;
    }

    public function getCap()
    {
        return $this->cap;
    }

    public function setCap($cap): self
    {
        $this->cap = $cap;
        return $this;
    }

    public function getInsp()
    {
        return $this->insp;
    }

    public function setInsp($insp): self
    {
        $this->insp = $insp;
        return $this;
    }

    public function getTvop()
    {
        return $this->tvop;
    }

    public function setTvop($tvop): self
    {
        $this->tvop = $tvop;
        return $this;
    }

    public function getTax17()
    {
        return $this->tax17;
    }

    public function setTax17($tax17): self
    {
        $this->tax17 = $tax17;
        return $this;
    }
}
