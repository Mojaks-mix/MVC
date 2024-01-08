<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe799998777cca6549fc97340a46874a
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/App/Controllers/HomeController.php',
        'App\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/App/Controllers/ProductsController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/App/Core/App.php',
        'App\\Core\\DB' => __DIR__ . '/../..' . '/App/Core/DB.php',
        'App\\Core\\View' => __DIR__ . '/../..' . '/App/Core/View.php',
        'App\\Exceptions\\RouteNotFoundException' => __DIR__ . '/../..' . '/App/Exceptions/RouteNotFoundException.php',
        'App\\Exceptions\\ViewNotFoundException' => __DIR__ . '/../..' . '/App/Exceptions/ViewNotFoundException.php',
        'App\\Models\\Product' => __DIR__ . '/../..' . '/App/Models/Product.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidEncodingException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'Dotenv\\Loader\\Resolver' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Resolver.php',
        'Dotenv\\Parser\\Entry' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Entry.php',
        'Dotenv\\Parser\\EntryParser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
        'Dotenv\\Parser\\Lexer' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lexer.php',
        'Dotenv\\Parser\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lines.php',
        'Dotenv\\Parser\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Parser.php',
        'Dotenv\\Parser\\ParserInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
        'Dotenv\\Parser\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Value.php',
        'Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'Dotenv\\Repository\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
        'Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\GuardedWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
        'Dotenv\\Repository\\Adapter\\ImmutableWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
        'Dotenv\\Repository\\Adapter\\MultiReader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
        'Dotenv\\Repository\\Adapter\\MultiWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
        'Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'Dotenv\\Repository\\Adapter\\ReplacingWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
        'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'Dotenv\\Store\\StringStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StringStore.php',
        'Dotenv\\Util\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Regex.php',
        'Dotenv\\Util\\Str' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Str.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'GrahamCampbell\\ResultType\\Error' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Error.php',
        'GrahamCampbell\\ResultType\\Result' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Result.php',
        'GrahamCampbell\\ResultType\\Success' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Success.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Smarty' => __DIR__ . '/..' . '/smarty/smarty/libs/Smarty.class.php',
        'SmartyCompilerException' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smartycompilerexception.php',
        'SmartyException' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smartyexception.php',
        'Smarty_Autoloader' => __DIR__ . '/..' . '/smarty/smarty/libs/Autoloader.php',
        'Smarty_CacheResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_cacheresource.php',
        'Smarty_CacheResource_Custom' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_cacheresource_custom.php',
        'Smarty_CacheResource_KeyValueStore' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_cacheresource_keyvaluestore.php',
        'Smarty_Data' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_data.php',
        'Smarty_Internal_Block' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_block.php',
        'Smarty_Internal_CacheResource_File' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_cacheresource_file.php',
        'Smarty_Internal_CompileBase' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compilebase.php',
        'Smarty_Internal_Compile_Append' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_append.php',
        'Smarty_Internal_Compile_Assign' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_assign.php',
        'Smarty_Internal_Compile_Block' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block.php',
        'Smarty_Internal_Compile_Block_Child' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block_child.php',
        'Smarty_Internal_Compile_Block_Parent' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block_parent.php',
        'Smarty_Internal_Compile_Blockclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block.php',
        'Smarty_Internal_Compile_Break' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_break.php',
        'Smarty_Internal_Compile_Call' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_call.php',
        'Smarty_Internal_Compile_Capture' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_capture.php',
        'Smarty_Internal_Compile_CaptureClose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_capture.php',
        'Smarty_Internal_Compile_Child' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_child.php',
        'Smarty_Internal_Compile_Config_Load' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_config_load.php',
        'Smarty_Internal_Compile_Continue' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_continue.php',
        'Smarty_Internal_Compile_Debug' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_debug.php',
        'Smarty_Internal_Compile_Else' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Elseif' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Eval' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_eval.php',
        'Smarty_Internal_Compile_Extends' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_extends.php',
        'Smarty_Internal_Compile_For' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Forclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Foreach' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Foreachclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Foreachelse' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
        'Smarty_Internal_Compile_Forelse' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
        'Smarty_Internal_Compile_Function' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_function.php',
        'Smarty_Internal_Compile_Functionclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_function.php',
        'Smarty_Internal_Compile_If' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Ifclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
        'Smarty_Internal_Compile_Include' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_include.php',
        'Smarty_Internal_Compile_Insert' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_insert.php',
        'Smarty_Internal_Compile_Ldelim' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_ldelim.php',
        'Smarty_Internal_Compile_Make_Nocache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_make_nocache.php',
        'Smarty_Internal_Compile_Nocache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_nocache.php',
        'Smarty_Internal_Compile_Nocacheclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_nocache.php',
        'Smarty_Internal_Compile_Parent' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_parent.php',
        'Smarty_Internal_Compile_Private_Block_Plugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_block_plugin.php',
        'Smarty_Internal_Compile_Private_ForeachSection' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_foreachsection.php',
        'Smarty_Internal_Compile_Private_Function_Plugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_function_plugin.php',
        'Smarty_Internal_Compile_Private_Modifier' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_modifier.php',
        'Smarty_Internal_Compile_Private_Object_Block_Function' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_object_block_function.php',
        'Smarty_Internal_Compile_Private_Object_Function' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_object_function.php',
        'Smarty_Internal_Compile_Private_Print_Expression' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_print_expression.php',
        'Smarty_Internal_Compile_Private_Registered_Block' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_registered_block.php',
        'Smarty_Internal_Compile_Private_Registered_Function' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_registered_function.php',
        'Smarty_Internal_Compile_Private_Special_Variable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_special_variable.php',
        'Smarty_Internal_Compile_Rdelim' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_rdelim.php',
        'Smarty_Internal_Compile_Section' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Sectionclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Sectionelse' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
        'Smarty_Internal_Compile_Setfilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_setfilter.php',
        'Smarty_Internal_Compile_Setfilterclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_setfilter.php',
        'Smarty_Internal_Compile_Shared_Inheritance' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_shared_inheritance.php',
        'Smarty_Internal_Compile_While' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_while.php',
        'Smarty_Internal_Compile_Whileclose' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_while.php',
        'Smarty_Internal_Config_File_Compiler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_config_file_compiler.php',
        'Smarty_Internal_Configfilelexer' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_configfilelexer.php',
        'Smarty_Internal_Configfileparser' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_configfileparser.php',
        'Smarty_Internal_Data' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_data.php',
        'Smarty_Internal_Debug' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_debug.php',
        'Smarty_Internal_ErrorHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_errorhandler.php',
        'Smarty_Internal_Extension_Handler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_extension_handler.php',
        'Smarty_Internal_Method_AddAutoloadFilters' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_addautoloadfilters.php',
        'Smarty_Internal_Method_AddDefaultModifiers' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_adddefaultmodifiers.php',
        'Smarty_Internal_Method_Append' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_append.php',
        'Smarty_Internal_Method_AppendByRef' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_appendbyref.php',
        'Smarty_Internal_Method_AssignByRef' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_assignbyref.php',
        'Smarty_Internal_Method_AssignGlobal' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_assignglobal.php',
        'Smarty_Internal_Method_ClearAllAssign' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearallassign.php',
        'Smarty_Internal_Method_ClearAllCache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearallcache.php',
        'Smarty_Internal_Method_ClearAssign' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearassign.php',
        'Smarty_Internal_Method_ClearCache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearcache.php',
        'Smarty_Internal_Method_ClearCompiledTemplate' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearcompiledtemplate.php',
        'Smarty_Internal_Method_ClearConfig' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearconfig.php',
        'Smarty_Internal_Method_CompileAllConfig' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_compileallconfig.php',
        'Smarty_Internal_Method_CompileAllTemplates' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_compilealltemplates.php',
        'Smarty_Internal_Method_ConfigLoad' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_configload.php',
        'Smarty_Internal_Method_CreateData' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_createdata.php',
        'Smarty_Internal_Method_GetAutoloadFilters' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getautoloadfilters.php',
        'Smarty_Internal_Method_GetConfigVariable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getconfigvariable.php',
        'Smarty_Internal_Method_GetConfigVars' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getconfigvars.php',
        'Smarty_Internal_Method_GetDebugTemplate' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getdebugtemplate.php',
        'Smarty_Internal_Method_GetDefaultModifiers' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getdefaultmodifiers.php',
        'Smarty_Internal_Method_GetGlobal' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getglobal.php',
        'Smarty_Internal_Method_GetRegisteredObject' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getregisteredobject.php',
        'Smarty_Internal_Method_GetStreamVariable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getstreamvariable.php',
        'Smarty_Internal_Method_GetTags' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_gettags.php',
        'Smarty_Internal_Method_GetTemplateVars' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_gettemplatevars.php',
        'Smarty_Internal_Method_Literals' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_literals.php',
        'Smarty_Internal_Method_LoadFilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_loadfilter.php',
        'Smarty_Internal_Method_LoadPlugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_loadplugin.php',
        'Smarty_Internal_Method_MustCompile' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_mustcompile.php',
        'Smarty_Internal_Method_RegisterCacheResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registercacheresource.php',
        'Smarty_Internal_Method_RegisterClass' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerclass.php',
        'Smarty_Internal_Method_RegisterDefaultConfigHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaultconfighandler.php',
        'Smarty_Internal_Method_RegisterDefaultPluginHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaultpluginhandler.php',
        'Smarty_Internal_Method_RegisterDefaultTemplateHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaulttemplatehandler.php',
        'Smarty_Internal_Method_RegisterFilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerfilter.php',
        'Smarty_Internal_Method_RegisterObject' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerobject.php',
        'Smarty_Internal_Method_RegisterPlugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerplugin.php',
        'Smarty_Internal_Method_RegisterResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerresource.php',
        'Smarty_Internal_Method_SetAutoloadFilters' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setautoloadfilters.php',
        'Smarty_Internal_Method_SetDebugTemplate' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setdebugtemplate.php',
        'Smarty_Internal_Method_SetDefaultModifiers' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setdefaultmodifiers.php',
        'Smarty_Internal_Method_UnloadFilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unloadfilter.php',
        'Smarty_Internal_Method_UnregisterCacheResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregistercacheresource.php',
        'Smarty_Internal_Method_UnregisterFilter' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterfilter.php',
        'Smarty_Internal_Method_UnregisterObject' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterobject.php',
        'Smarty_Internal_Method_UnregisterPlugin' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterplugin.php',
        'Smarty_Internal_Method_UnregisterResource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterresource.php',
        'Smarty_Internal_Nocache_Insert' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_nocache_insert.php',
        'Smarty_Internal_ParseTree' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree.php',
        'Smarty_Internal_ParseTree_Code' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_code.php',
        'Smarty_Internal_ParseTree_Dq' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_dq.php',
        'Smarty_Internal_ParseTree_DqContent' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_dqcontent.php',
        'Smarty_Internal_ParseTree_Tag' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_tag.php',
        'Smarty_Internal_ParseTree_Template' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_template.php',
        'Smarty_Internal_ParseTree_Text' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_text.php',
        'Smarty_Internal_Resource_Eval' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_eval.php',
        'Smarty_Internal_Resource_Extends' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_extends.php',
        'Smarty_Internal_Resource_File' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_file.php',
        'Smarty_Internal_Resource_Php' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_php.php',
        'Smarty_Internal_Resource_Stream' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_stream.php',
        'Smarty_Internal_Resource_String' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_string.php',
        'Smarty_Internal_Runtime_CacheModify' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_cachemodify.php',
        'Smarty_Internal_Runtime_CacheResourceFile' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_cacheresourcefile.php',
        'Smarty_Internal_Runtime_Capture' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_capture.php',
        'Smarty_Internal_Runtime_CodeFrame' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_codeframe.php',
        'Smarty_Internal_Runtime_FilterHandler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_filterhandler.php',
        'Smarty_Internal_Runtime_Foreach' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_foreach.php',
        'Smarty_Internal_Runtime_GetIncludePath' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_getincludepath.php',
        'Smarty_Internal_Runtime_Inheritance' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_inheritance.php',
        'Smarty_Internal_Runtime_Make_Nocache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_make_nocache.php',
        'Smarty_Internal_Runtime_TplFunction' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_tplfunction.php',
        'Smarty_Internal_Runtime_UpdateCache' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_updatecache.php',
        'Smarty_Internal_Runtime_UpdateScope' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_updatescope.php',
        'Smarty_Internal_Runtime_WriteFile' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_writefile.php',
        'Smarty_Internal_SmartyTemplateCompiler' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_smartytemplatecompiler.php',
        'Smarty_Internal_Template' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_template.php',
        'Smarty_Internal_TemplateBase' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templatebase.php',
        'Smarty_Internal_TemplateCompilerBase' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templatecompilerbase.php',
        'Smarty_Internal_Templatelexer' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templatelexer.php',
        'Smarty_Internal_Templateparser' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templateparser.php',
        'Smarty_Internal_TestInstall' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_testinstall.php',
        'Smarty_Internal_Undefined' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_undefined.php',
        'Smarty_Resource' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_resource.php',
        'Smarty_Resource_Custom' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_resource_custom.php',
        'Smarty_Resource_Recompiled' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_resource_recompiled.php',
        'Smarty_Resource_Uncompiled' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_resource_uncompiled.php',
        'Smarty_Security' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_security.php',
        'Smarty_Template_Cached' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_cached.php',
        'Smarty_Template_Compiled' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_compiled.php',
        'Smarty_Template_Config' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_config.php',
        'Smarty_Template_Resource_Base' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_resource_base.php',
        'Smarty_Template_Source' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_template_source.php',
        'Smarty_Undefined_Variable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_undefined_variable.php',
        'Smarty_Variable' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_variable.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'TPC_yyStackEntry' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_configfileparser.php',
        'TP_yyStackEntry' => __DIR__ . '/..' . '/smarty/smarty/libs/sysplugins/smarty_internal_templateparser.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe799998777cca6549fc97340a46874a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe799998777cca6549fc97340a46874a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe799998777cca6549fc97340a46874a::$classMap;

        }, null, ClassLoader::class);
    }
}