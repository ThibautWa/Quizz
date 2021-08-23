<?php

namespace ContainerKtbXfXA;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb3ca5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf0601 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf37d9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getConnection', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getMetadataFactory', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getExpressionBuilder', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'beginTransaction', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getCache', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'transactional', array('func' => $func), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->transactional($func);
    }

    public function commit()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'commit', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->commit();
    }

    public function rollback()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'rollback', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getClassMetadata', array('className' => $className), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'createQuery', array('dql' => $dql), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'createNamedQuery', array('name' => $name), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'createQueryBuilder', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'flush', array('entity' => $entity), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'clear', array('entityName' => $entityName), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->clear($entityName);
    }

    public function close()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'close', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->close();
    }

    public function persist($entity)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'persist', array('entity' => $entity), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'remove', array('entity' => $entity), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'refresh', array('entity' => $entity), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'detach', array('entity' => $entity), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'merge', array('entity' => $entity), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'contains', array('entity' => $entity), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getEventManager', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getConfiguration', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'isOpen', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getUnitOfWork', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getProxyFactory', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'initializeObject', array('obj' => $obj), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'getFilters', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'isFiltersStateClean', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'hasFilters', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return $this->valueHolderb3ca5->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf0601 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb3ca5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb3ca5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb3ca5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, '__get', ['name' => $name], $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        if (isset(self::$publicPropertiesf37d9[$name])) {
            return $this->valueHolderb3ca5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb3ca5;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb3ca5;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb3ca5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb3ca5;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, '__isset', array('name' => $name), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb3ca5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb3ca5;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, '__unset', array('name' => $name), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb3ca5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb3ca5;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, '__clone', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        $this->valueHolderb3ca5 = clone $this->valueHolderb3ca5;
    }

    public function __sleep()
    {
        $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, '__sleep', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;

        return array('valueHolderb3ca5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf0601 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf0601;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf0601 && ($this->initializerf0601->__invoke($valueHolderb3ca5, $this, 'initializeProxy', array(), $this->initializerf0601) || 1) && $this->valueHolderb3ca5 = $valueHolderb3ca5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb3ca5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb3ca5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
