<?php

namespace Survey\SurveyPage\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface {
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('surveypage_survey')
        )->addColumn(
            'survey_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Custom Id'
        )->addColumn(
            'answer1',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Custom Answer1'
        )->addColumn(
            'answer2',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Custom Answer2'
        )->setComment(
            'Custom Table'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
    //DELETE FROM setup_module WHERE module = "Survey_SurveyPage";
    //sudo php bin/magento cache:flush
    //sudo php bin/magento setup:upgrade
    //sudo php bin/magento setup:di:compile
}

