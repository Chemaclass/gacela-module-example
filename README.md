# Gacela Module example

This is an example of a module using [Gacela Framework](http://gacela-project.com/).

### Basic Gacela structure

```bash
application-name
├── gacela.php
├── config // Default config behaviour. You can change it in `gacela.php`
│   ├── local.php
│   └── default.php
│
├── src
│   ├── ExampleModuleWithoutPrefix
│   │   ├── Domain
│   │   │   └── YourLogicClass.php
│   │   ├── Config.php
│   │   ├── Facade.php
│   │   └── Factory.php
│   │
│   └── ExampleModuleWithPrefix
│       ├── Domain
│       │   └── YourLogicClass.php
│       ├── ExampleModuleWithPrefixConfig.php
│       ├── ExampleModuleWithPrefixFacade.php
│       └── ExampleModuleWithPrefixFactory.php
│
├── tests
│   └── ...
└── vendor
    └── ...
```

### Documentation

You can check the full documentation in the official [website](https://gacela-project.com/).


