<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CMsgAuthTicket message
 */
class CMsgAuthTicket extends \ProtobufMessage
{
    /* Field index constants */
    const ESTATE = 1;
    const ERESULT = 2;
    const STEAMID = 3;
    const GAMEID = 4;
    const H_STEAM_PIPE = 5;
    const TICKET_CRC = 6;
    const TICKET = 7;
    const SERVER_SECRET = 8;
    const TICKET_TYPE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ESTATE => array(
            'name' => 'estate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERESULT => array(
            'default' => 2,
            'name' => 'eresult',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::GAMEID => array(
            'name' => 'gameid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::H_STEAM_PIPE => array(
            'name' => 'h_steam_pipe',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TICKET_CRC => array(
            'name' => 'ticket_crc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TICKET => array(
            'name' => 'ticket',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SERVER_SECRET => array(
            'name' => 'server_secret',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TICKET_TYPE => array(
            'name' => 'ticket_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::ESTATE] = null;
        $this->values[self::ERESULT] = self::$fields[self::ERESULT]['default'];
        $this->values[self::STEAMID] = null;
        $this->values[self::GAMEID] = null;
        $this->values[self::H_STEAM_PIPE] = null;
        $this->values[self::TICKET_CRC] = null;
        $this->values[self::TICKET] = null;
        $this->values[self::SERVER_SECRET] = null;
        $this->values[self::TICKET_TYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'estate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEstate($value)
    {
        return $this->set(self::ESTATE, $value);
    }

    /**
     * Returns value of 'estate' property
     *
     * @return integer
     */
    public function getEstate()
    {
        $value = $this->get(self::ESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'estate' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEstate()
    {
        return $this->get(self::ESTATE) !== null;
    }

    /**
     * Sets value of 'eresult' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEresult($value)
    {
        return $this->set(self::ERESULT, $value);
    }

    /**
     * Returns value of 'eresult' property
     *
     * @return integer
     */
    public function getEresult()
    {
        $value = $this->get(self::ERESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'eresult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEresult()
    {
        return $this->get(self::ERESULT) !== null;
    }

    /**
     * Sets value of 'steamid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSteamid($value)
    {
        return $this->set(self::STEAMID, $value);
    }

    /**
     * Returns value of 'steamid' property
     *
     * @return integer
     */
    public function getSteamid()
    {
        $value = $this->get(self::STEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'steamid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSteamid()
    {
        return $this->get(self::STEAMID) !== null;
    }

    /**
     * Sets value of 'gameid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameid($value)
    {
        return $this->set(self::GAMEID, $value);
    }

    /**
     * Returns value of 'gameid' property
     *
     * @return integer
     */
    public function getGameid()
    {
        $value = $this->get(self::GAMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameid()
    {
        return $this->get(self::GAMEID) !== null;
    }

    /**
     * Sets value of 'h_steam_pipe' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHSteamPipe($value)
    {
        return $this->set(self::H_STEAM_PIPE, $value);
    }

    /**
     * Returns value of 'h_steam_pipe' property
     *
     * @return integer
     */
    public function getHSteamPipe()
    {
        $value = $this->get(self::H_STEAM_PIPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'h_steam_pipe' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHSteamPipe()
    {
        return $this->get(self::H_STEAM_PIPE) !== null;
    }

    /**
     * Sets value of 'ticket_crc' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTicketCrc($value)
    {
        return $this->set(self::TICKET_CRC, $value);
    }

    /**
     * Returns value of 'ticket_crc' property
     *
     * @return integer
     */
    public function getTicketCrc()
    {
        $value = $this->get(self::TICKET_CRC);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ticket_crc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTicketCrc()
    {
        return $this->get(self::TICKET_CRC) !== null;
    }

    /**
     * Sets value of 'ticket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTicket($value)
    {
        return $this->set(self::TICKET, $value);
    }

    /**
     * Returns value of 'ticket' property
     *
     * @return string
     */
    public function getTicket()
    {
        $value = $this->get(self::TICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ticket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTicket()
    {
        return $this->get(self::TICKET) !== null;
    }

    /**
     * Sets value of 'server_secret' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServerSecret($value)
    {
        return $this->set(self::SERVER_SECRET, $value);
    }

    /**
     * Returns value of 'server_secret' property
     *
     * @return string
     */
    public function getServerSecret()
    {
        $value = $this->get(self::SERVER_SECRET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'server_secret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerSecret()
    {
        return $this->get(self::SERVER_SECRET) !== null;
    }

    /**
     * Sets value of 'ticket_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTicketType($value)
    {
        return $this->set(self::TICKET_TYPE, $value);
    }

    /**
     * Returns value of 'ticket_type' property
     *
     * @return integer
     */
    public function getTicketType()
    {
        $value = $this->get(self::TICKET_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ticket_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTicketType()
    {
        return $this->get(self::TICKET_TYPE) !== null;
    }
}
}