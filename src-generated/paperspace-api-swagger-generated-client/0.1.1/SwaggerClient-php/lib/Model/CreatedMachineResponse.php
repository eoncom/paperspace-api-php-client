<?php
/**
 * CreatedMachineResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Paperspace
 *
 * Swagger representation of the Paperspace HTTP API
 *
 * OpenAPI spec version: 0.1.1
 * Contact: support@paperspace.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreatedMachineResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreatedMachineResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreatedMachineResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'os' => 'string',
        'ram' => 'int',
        'cpus' => 'int',
        'gpu' => 'string',
        'storage_total' => 'int',
        'storage_used' => 'int',
        'usage_rate' => 'string',
        'shutdown_timeout_in_hours' => 'int',
        'shutdown_timeout_forces' => 'bool',
        'perform_auto_snapshot' => 'bool',
        'auto_snapshot_frequency' => 'int',
        'auto_snapshot_save_count' => 'int',
        'agent_type' => 'string',
        'dt_created' => 'string',
        'state' => 'string',
        'network_id' => 'string',
        'private_ip_address' => 'string',
        'public_ip_address' => 'string',
        'region' => 'string',
        'user_id' => 'string',
        'team_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'os' => null,
        'ram' => 'int32',
        'cpus' => 'int32',
        'gpu' => null,
        'storage_total' => 'int32',
        'storage_used' => 'int32',
        'usage_rate' => null,
        'shutdown_timeout_in_hours' => 'int32',
        'shutdown_timeout_forces' => null,
        'perform_auto_snapshot' => null,
        'auto_snapshot_frequency' => 'int32',
        'auto_snapshot_save_count' => 'int32',
        'agent_type' => null,
        'dt_created' => 'datetime',
        'state' => 'datetime',
        'network_id' => null,
        'private_ip_address' => null,
        'public_ip_address' => null,
        'region' => null,
        'user_id' => null,
        'team_id' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'os' => 'os',
        'ram' => 'ram',
        'cpus' => 'cpus',
        'gpu' => 'gpu',
        'storage_total' => 'storageTotal',
        'storage_used' => 'storageUsed',
        'usage_rate' => 'usageRate',
        'shutdown_timeout_in_hours' => 'shutdownTimeoutInHours',
        'shutdown_timeout_forces' => 'shutdownTimeoutForces',
        'perform_auto_snapshot' => 'performAutoSnapshot',
        'auto_snapshot_frequency' => 'autoSnapshotFrequency',
        'auto_snapshot_save_count' => 'autoSnapshotSaveCount',
        'agent_type' => 'agentType',
        'dt_created' => 'dtCreated',
        'state' => 'state',
        'network_id' => 'networkId',
        'private_ip_address' => 'privateIpAddress',
        'public_ip_address' => 'publicIpAddress',
        'region' => 'region',
        'user_id' => 'userId',
        'team_id' => 'teamId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'os' => 'setOs',
        'ram' => 'setRam',
        'cpus' => 'setCpus',
        'gpu' => 'setGpu',
        'storage_total' => 'setStorageTotal',
        'storage_used' => 'setStorageUsed',
        'usage_rate' => 'setUsageRate',
        'shutdown_timeout_in_hours' => 'setShutdownTimeoutInHours',
        'shutdown_timeout_forces' => 'setShutdownTimeoutForces',
        'perform_auto_snapshot' => 'setPerformAutoSnapshot',
        'auto_snapshot_frequency' => 'setAutoSnapshotFrequency',
        'auto_snapshot_save_count' => 'setAutoSnapshotSaveCount',
        'agent_type' => 'setAgentType',
        'dt_created' => 'setDtCreated',
        'state' => 'setState',
        'network_id' => 'setNetworkId',
        'private_ip_address' => 'setPrivateIpAddress',
        'public_ip_address' => 'setPublicIpAddress',
        'region' => 'setRegion',
        'user_id' => 'setUserId',
        'team_id' => 'setTeamId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'os' => 'getOs',
        'ram' => 'getRam',
        'cpus' => 'getCpus',
        'gpu' => 'getGpu',
        'storage_total' => 'getStorageTotal',
        'storage_used' => 'getStorageUsed',
        'usage_rate' => 'getUsageRate',
        'shutdown_timeout_in_hours' => 'getShutdownTimeoutInHours',
        'shutdown_timeout_forces' => 'getShutdownTimeoutForces',
        'perform_auto_snapshot' => 'getPerformAutoSnapshot',
        'auto_snapshot_frequency' => 'getAutoSnapshotFrequency',
        'auto_snapshot_save_count' => 'getAutoSnapshotSaveCount',
        'agent_type' => 'getAgentType',
        'dt_created' => 'getDtCreated',
        'state' => 'getState',
        'network_id' => 'getNetworkId',
        'private_ip_address' => 'getPrivateIpAddress',
        'public_ip_address' => 'getPublicIpAddress',
        'region' => 'getRegion',
        'user_id' => 'getUserId',
        'team_id' => 'getTeamId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const REGION_EAST_COAST__NY2 = 'East Coast (NY2)';
    const REGION_WEST_COAST__CA1 = 'West Coast (CA1)';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_EAST_COAST__NY2,
            self::REGION_WEST_COAST__CA1,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['cpus'] = isset($data['cpus']) ? $data['cpus'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['storage_total'] = isset($data['storage_total']) ? $data['storage_total'] : null;
        $this->container['storage_used'] = isset($data['storage_used']) ? $data['storage_used'] : null;
        $this->container['usage_rate'] = isset($data['usage_rate']) ? $data['usage_rate'] : null;
        $this->container['shutdown_timeout_in_hours'] = isset($data['shutdown_timeout_in_hours']) ? $data['shutdown_timeout_in_hours'] : null;
        $this->container['shutdown_timeout_forces'] = isset($data['shutdown_timeout_forces']) ? $data['shutdown_timeout_forces'] : null;
        $this->container['perform_auto_snapshot'] = isset($data['perform_auto_snapshot']) ? $data['perform_auto_snapshot'] : null;
        $this->container['auto_snapshot_frequency'] = isset($data['auto_snapshot_frequency']) ? $data['auto_snapshot_frequency'] : null;
        $this->container['auto_snapshot_save_count'] = isset($data['auto_snapshot_save_count']) ? $data['auto_snapshot_save_count'] : null;
        $this->container['agent_type'] = isset($data['agent_type']) ? $data['agent_type'] : null;
        $this->container['dt_created'] = isset($data['dt_created']) ? $data['dt_created'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['private_ip_address'] = isset($data['private_ip_address']) ? $data['private_ip_address'] : null;
        $this->container['public_ip_address'] = isset($data['public_ip_address']) ? $data['public_ip_address'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['team_id'] = isset($data['team_id']) ? $data['team_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getRegionAllowableValues();
        if (!in_array($this->container['region'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'region', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getRegionAllowableValues();
        if (!in_array($this->container['region'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets os
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param string $os 
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets ram
     * @return int
     */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
     * Sets ram
     * @param int $ram 
     * @return $this
     */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;

        return $this;
    }

    /**
     * Gets cpus
     * @return int
     */
    public function getCpus()
    {
        return $this->container['cpus'];
    }

    /**
     * Sets cpus
     * @param int $cpus 
     * @return $this
     */
    public function setCpus($cpus)
    {
        $this->container['cpus'] = $cpus;

        return $this;
    }

    /**
     * Gets gpu
     * @return string
     */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
     * Sets gpu
     * @param string $gpu 
     * @return $this
     */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;

        return $this;
    }

    /**
     * Gets storage_total
     * @return int
     */
    public function getStorageTotal()
    {
        return $this->container['storage_total'];
    }

    /**
     * Sets storage_total
     * @param int $storage_total 
     * @return $this
     */
    public function setStorageTotal($storage_total)
    {
        $this->container['storage_total'] = $storage_total;

        return $this;
    }

    /**
     * Gets storage_used
     * @return int
     */
    public function getStorageUsed()
    {
        return $this->container['storage_used'];
    }

    /**
     * Sets storage_used
     * @param int $storage_used 
     * @return $this
     */
    public function setStorageUsed($storage_used)
    {
        $this->container['storage_used'] = $storage_used;

        return $this;
    }

    /**
     * Gets usage_rate
     * @return string
     */
    public function getUsageRate()
    {
        return $this->container['usage_rate'];
    }

    /**
     * Sets usage_rate
     * @param string $usage_rate 
     * @return $this
     */
    public function setUsageRate($usage_rate)
    {
        $this->container['usage_rate'] = $usage_rate;

        return $this;
    }

    /**
     * Gets shutdown_timeout_in_hours
     * @return int
     */
    public function getShutdownTimeoutInHours()
    {
        return $this->container['shutdown_timeout_in_hours'];
    }

    /**
     * Sets shutdown_timeout_in_hours
     * @param int $shutdown_timeout_in_hours 
     * @return $this
     */
    public function setShutdownTimeoutInHours($shutdown_timeout_in_hours)
    {
        $this->container['shutdown_timeout_in_hours'] = $shutdown_timeout_in_hours;

        return $this;
    }

    /**
     * Gets shutdown_timeout_forces
     * @return bool
     */
    public function getShutdownTimeoutForces()
    {
        return $this->container['shutdown_timeout_forces'];
    }

    /**
     * Sets shutdown_timeout_forces
     * @param bool $shutdown_timeout_forces 
     * @return $this
     */
    public function setShutdownTimeoutForces($shutdown_timeout_forces)
    {
        $this->container['shutdown_timeout_forces'] = $shutdown_timeout_forces;

        return $this;
    }

    /**
     * Gets perform_auto_snapshot
     * @return bool
     */
    public function getPerformAutoSnapshot()
    {
        return $this->container['perform_auto_snapshot'];
    }

    /**
     * Sets perform_auto_snapshot
     * @param bool $perform_auto_snapshot 
     * @return $this
     */
    public function setPerformAutoSnapshot($perform_auto_snapshot)
    {
        $this->container['perform_auto_snapshot'] = $perform_auto_snapshot;

        return $this;
    }

    /**
     * Gets auto_snapshot_frequency
     * @return int
     */
    public function getAutoSnapshotFrequency()
    {
        return $this->container['auto_snapshot_frequency'];
    }

    /**
     * Sets auto_snapshot_frequency
     * @param int $auto_snapshot_frequency 
     * @return $this
     */
    public function setAutoSnapshotFrequency($auto_snapshot_frequency)
    {
        $this->container['auto_snapshot_frequency'] = $auto_snapshot_frequency;

        return $this;
    }

    /**
     * Gets auto_snapshot_save_count
     * @return int
     */
    public function getAutoSnapshotSaveCount()
    {
        return $this->container['auto_snapshot_save_count'];
    }

    /**
     * Sets auto_snapshot_save_count
     * @param int $auto_snapshot_save_count 
     * @return $this
     */
    public function setAutoSnapshotSaveCount($auto_snapshot_save_count)
    {
        $this->container['auto_snapshot_save_count'] = $auto_snapshot_save_count;

        return $this;
    }

    /**
     * Gets agent_type
     * @return string
     */
    public function getAgentType()
    {
        return $this->container['agent_type'];
    }

    /**
     * Sets agent_type
     * @param string $agent_type 
     * @return $this
     */
    public function setAgentType($agent_type)
    {
        $this->container['agent_type'] = $agent_type;

        return $this;
    }

    /**
     * Gets dt_created
     * @return string
     */
    public function getDtCreated()
    {
        return $this->container['dt_created'];
    }

    /**
     * Sets dt_created
     * @param string $dt_created 
     * @return $this
     */
    public function setDtCreated($dt_created)
    {
        $this->container['dt_created'] = $dt_created;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state 
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets network_id
     * @return string
     */
    public function getNetworkId()
    {
        return $this->container['network_id'];
    }

    /**
     * Sets network_id
     * @param string $network_id 
     * @return $this
     */
    public function setNetworkId($network_id)
    {
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets private_ip_address
     * @return string
     */
    public function getPrivateIpAddress()
    {
        return $this->container['private_ip_address'];
    }

    /**
     * Sets private_ip_address
     * @param string $private_ip_address 
     * @return $this
     */
    public function setPrivateIpAddress($private_ip_address)
    {
        $this->container['private_ip_address'] = $private_ip_address;

        return $this;
    }

    /**
     * Gets public_ip_address
     * @return string
     */
    public function getPublicIpAddress()
    {
        return $this->container['public_ip_address'];
    }

    /**
     * Sets public_ip_address
     * @param string $public_ip_address 
     * @return $this
     */
    public function setPublicIpAddress($public_ip_address)
    {
        $this->container['public_ip_address'] = $public_ip_address;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region 
     * @return $this
     */
    public function setRegion($region)
    {
        $allowed_values = $this->getRegionAllowableValues();
        if (!is_null($region) && !in_array($region, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'region', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id 
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets team_id
     * @return string
     */
    public function getTeamId()
    {
        return $this->container['team_id'];
    }

    /**
     * Sets team_id
     * @param string $team_id 
     * @return $this
     */
    public function setTeamId($team_id)
    {
        $this->container['team_id'] = $team_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


