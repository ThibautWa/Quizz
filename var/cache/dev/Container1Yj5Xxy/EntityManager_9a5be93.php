<?php

namespace Container1Yj5Xxy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0532f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7e395 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties61b42 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getConnection', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getMetadataFactory', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getExpressionBuilder', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'beginTransaction', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getCache', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'transactional', array('func' => $func), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->transactional($func);
    }

    public function commit()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'commit', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->commit();
    }

    public function rollback()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'rollback', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getClassMetadata', array('className' => $className), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'createQuery', array('dql' => $dql), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'createNamedQuery', array('name' => $name), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'createQueryBuilder', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'flush', array('entity' => $entity), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'clear', array('entityName' => $entityName), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->clear($entityName);
    }

    public function close()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'close', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->close();
    }

    public function persist($entity)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'persist', array('entity' => $entity), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'remove', array('entity' => $entity), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'refresh', array('entity' => $entity), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'detach', array('entity' => $entity), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'merge', array('entity' => $entity), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'contains', array('entity' => $entity), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getEventManager', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getConfiguration', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'isOpen', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getUnitOfWork', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getProxyFactory', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'initializeObject', array('obj' => $obj), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'getFilters', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'isFiltersStateClean', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'hasFilters', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return $this->valueHolder0532f->hasFilters();
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

        $instance->initializer7e395 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0532f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0532f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0532f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, '__get', ['name' => $name], $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        if (isset(self::$publicProperties61b42[$name])) {
            return $this->valueHolder0532f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0532f;

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

        $targetObject = $this->valueHolder0532f;
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
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0532f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0532f;
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
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, '__isset', array('name' => $name), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0532f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0532f;
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
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, '__unset', array('name' => $name), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0532f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0532f;
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
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, '__clone', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        $this->valueHolder0532f = clone $this->valueHolder0532f;
    }

    public function __sleep()
    {
        $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, '__sleep', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;

        return array('valueHolder0532f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7e395 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7e395;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7e395 && ($this->initializer7e395->__invoke($valueHolder0532f, $this, 'initializeProxy', array(), $this->initializer7e395) || 1) && $this->valueHolder0532f = $valueHolder0532f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0532f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0532f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
