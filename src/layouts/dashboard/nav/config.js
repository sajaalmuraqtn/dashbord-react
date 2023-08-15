// component
import SvgColor from '../../../components/svg-color';

// ----------------------------------------------------------------------

const icon = (name) => <SvgColor src={`/assets/icons/navbar/${name}.svg`} sx={{ width: 1, height: 1 }} />;

const navConfig = [
  {
    title: 'لوحة التحكم',
    path: '/dashboard/app',
    icon: icon('ic_analytics'),
  },
  {
    title: 'المستخدم',
    path: '/dashboard/user',
    icon: icon('ic_user'),
  },
  {
    title: 'تسجيل الدخول',
    path: '/login',
    icon: icon('ic_lock'),
  }
];

export default navConfig;
