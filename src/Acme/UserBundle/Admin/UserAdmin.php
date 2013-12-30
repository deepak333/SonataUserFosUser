<?php

// src/Acme/DemoBundle/Admin/PostAdmin.php
namespace Acme\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('email', 'text', array('label' => 'Email'))
            ->add('username', 'text', array('label' => 'User Name'))
            ->add('password', 'password', array('label' => 'Password'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('username')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('email')
            ->add('username')
            ->add('author')
            ->add('enabled')
            ->add('locked')
            ->add('expired')
            ->add('last_login', 'datetime')
        ;
    }

}